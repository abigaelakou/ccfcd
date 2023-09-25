<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;

class Matiere extends Model
{
    use HasFactory;
    protected $table = 'matieres';
    protected $primaryKey = 'id';
    protected $guarded = ['updated_at'];
    public $timestamps = true;
    public $incrementing = true;

    public static function ajouter(Request $request)
    {
        try {
            if (!($request instanceof Request)) {
                throw new \Exception('Instance de Illuminate\Http\Request attendue en paramètre, ' . (is_object($request) ? get_class($request) : gettype($request)) . ' trouvé.');
            }

            $result = [
                'code_http' => 201,
                'code_message' => 201
            ];

            $inputs = json_decode($request->getContent(), true);

            if (!is_array($inputs)) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = 'Corps de la requête vide.';
                return $result;
            }

            $rules = [
                'libelle' => 'required|string',
            ];

            $validator = Validator::make($inputs, $rules);
            if (!$validator->passes()) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = $validator->errors()->all();
                return $result;
            }

            $matiere = Matiere::where('libelle', $inputs['libelle'])->first();

            if (is_null($matiere)) {

                $nouvelle_matiere = new Matiere();
                $nouvelle_matiere->created_at = now();
                $nouvelle_matiere->libelle = $inputs['libelle'];
                $nouvelle_matiere->save();

                $matiere = Matiere::where('libelle', $inputs['libelle'])->orderBy('id', 'desc')->first();
                $result['id_matiere'] = $matiere->id;
            } else {
                Log::info('Erreur d\'ajout d\'une matiere avec un libellé déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_LIBELLE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Matiere::ajouter a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    public static function lister(Request $request)
    {
        try {
            if (!($request instanceof Request)) {
                throw new \Exception('Instance de Illuminate\Http\Request attendue en paramètre, ' . (is_object($request) ? get_class($request) : gettype($request)) . ' trouvé.');
            }

            $result = [
                'code_http' => 200,
                'code_message' => 200,
                'donnees' => []
            ];

            $matieres = Matiere::orderBy('id', 'desc')->get();
            if (count($matieres)) {

                foreach ($matieres as $matiere) {
                    $result['donnees'][strval($matiere->id)] = [
                        'id' => $matiere->id,
                        'libelle' => $matiere->libelle,
                    ];
                }
            }
            $result['donnees'] = array_values($result['donnees']);
            return $result;
        } catch (\Exception $e) {
            Log::error('Matiere::lister a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    public function lire(Request $request)
    {
        try {
            if (!($request instanceof Request)) {
                throw new \Exception('Instance de Illuminate\Http\Request attendue en paramètre, ' . (is_object($request) ? get_class($request) : gettype($request)) . ' trouvé.');
            }

            $result = [
                'code_http' => 200,
                'code_message' => 200,
                'matiere' => []
            ];

            $matieres = Matiere::where('id', $this->id)->get();

            if (count($matieres)) {
                foreach ($matieres as $matiere) {
                    $result['matiere'] = [
                        'id'          => $matiere->id,
                        'libelle'     => $matiere->libelle,
                    ];
                }
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Matiere::lire a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    //modifier une matiere
    public function modifier(Request $request)
    {
        try {
            if (!($request instanceof Request)) {
                throw new \Exception('Instance de Illuminate\Http\Request attendue en paramètre, ' . (is_object($request) ? get_class($request) : gettype($request)) . ' trouvé.');
            }

            $result = [
                'code_http' => 200,
                'code_message' => 200
            ];

            $inputs = json_decode($request->getContent(), true);
            if (!is_array($inputs)) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = 'Corps de la requête vide.';
                return $result;
            }

            if (empty($inputs)) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = 'Corps de la requête vide.';
                return $result;
            }

            $rules = [
                'libelle' => 'string|'
            ];

            $validator = Validator::make($inputs, $rules);
            if (!$validator->passes()) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = $validator->errors()->all();
                return $result;
            }

            $matiere = Matiere::where('libelle', $inputs['libelle'])
                ->where('id', '<>', $this->id)
                ->first();

            if (is_null($matiere)) {
                if (array_key_exists('libelle', $inputs)) {
                    $this->libelle = $inputs['libelle'];
                }
                $this->save();

                Log::info('Matiere modifié.', ['id' => $this->id]);
            } else {
                Log::info('Erreur de modification d\'une matiere avec un libellé déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_LIBELLE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Classe::modifier a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }
}
