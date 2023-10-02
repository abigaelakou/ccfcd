<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;


class Moyenne extends Model
{
    use HasFactory;

    protected $table = 'moyennes';
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

            $moyenne = Moyenne::where('libelle', $inputs['libelle'])->first();

            if (is_null($moyenne)) {

                $nouvelle_moyenne = new Moyenne();
                $nouvelle_moyenne->created_at = now();
                $nouvelle_moyenne->libelle = $inputs['libelle'];
                $nouvelle_moyenne->save();

                $moyenne = Moyenne::where('libelle', $inputs['libelle'])->orderBy('id', 'desc')->first();
                $result['id_matiere'] = $moyenne->id;
            } else {
                Log::info('Erreur d\'ajout d\'une moyenne avec un libellé déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_LIBELLE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Moyenne::ajouter a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
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

            $moyennes = Moyenne::orderBy('id', 'desc')->get();
            if (count($moyennes)) {

                foreach ($moyennes as $moyenne) {
                    $result['donnees'][strval($moyenne->id)] = [
                        'id' => $moyenne->id,
                        'libelle' => $moyenne->libelle,
                    ];
                }
            }
            $result['donnees'] = array_values($result['donnees']);
            return $result;
        } catch (\Exception $e) {
            Log::error('Moyenne::lister a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
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
                'moyenne' => []
            ];

            $moyennes = Moyenne::where('id', $this->id)->get();

            if (count($moyennes)) {
                foreach ($moyennes as $moyenne) {
                    $result['moyenne'] = [
                        'id'          => $moyenne->id,
                        'libelle'     => $moyenne->libelle,
                    ];
                }
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Matiere::lire a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    //modifier une moyenne
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

            $moyenne = Moyenne::where('libelle', $inputs['libelle'])
                ->where('id', '<>', $this->id)
                ->first();

            if (is_null($moyenne)) {
                if (array_key_exists('libelle', $inputs)) {
                    $this->libelle = $inputs['libelle'];
                }
                $this->save();

                Log::info('Moyenne modifié.', ['id' => $this->id]);
            } else {
                Log::info('Erreur de modification d\'une moyenne avec un libellé déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_LIBELLE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Classe::modifier a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }
}
