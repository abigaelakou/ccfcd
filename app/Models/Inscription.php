<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Validator;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';
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
                'matricule' => 'required|string|max:255',
                'nom' => 'required|string|max:255',
                'date_naiss' => 'required|date|',
                'lieu_naiss' => 'required|string|max:255',
                'genre' => 'required|string|in:Feminin, Masculin',
                'classe_precedent' => 'string',
                'classe_a_suivre' => 'string',
                'nom_pere' => 'required|string|max:255',
                'contact_pere' => 'required|string|max:255',
                'nom_mere' => 'required|string|max:255',
                'contact_mere' => 'required|string|max:255',
                'tuteur_legal' => 'string|max:255',

            ];

            $validator = Validator::make($inputs, $rules);
            if (!$validator->passes()) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = $validator->errors()->all();
                return $result;
            }

            $inscription = Inscription::where('matricule', $inputs['matricule'])->first();

            if (is_null($inscription)) {

                $nouvelle_inscription = new Inscription();
                $nouvelle_inscription->matricule        = $inputs['matricule'];
                $nouvelle_inscription->nom              = $inputs['nom'];
                $nouvelle_inscription->date_naiss       = $inputs['date_naiss'];
                $nouvelle_inscription->lieu_naiss       = $inputs['lieu_naiss'];
                $nouvelle_inscription->genre            = $inputs['genre'];
                $nouvelle_inscription->classe_precedent = $inputs['classe_precedent'];
                $nouvelle_inscription->classe_a_suivre  = $inputs['classe_a_suivre'];
                $nouvelle_inscription->nom_pere         = $inputs['nom_pere'];
                $nouvelle_inscription->contact_pere     = $inputs['contact_pere'];
                $nouvelle_inscription->nom_mere         = $inputs['nom_mere'];
                $nouvelle_inscription->contact_mere     = $inputs['contact_mere'];
                $nouvelle_inscription->tuteur_legal     = $inputs['tuteur_legal'];
                $nouvelle_inscription->created_at       = now();
                $nouvelle_inscription->save();

                $inscription = Inscription::where('matricule', $inputs['matricule'])->orderBy('id', 'desc')->first();
                $result['id_inscription'] = $inscription->id;
            } else {
                Log::info('Erreur d\'ajout d\'une inscription avec un titre déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_TITRE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Inscription::ajouter a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    // Fonction listage
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

            $inscription = Inscription::orderBy('id', 'desc')->get();
            if (count($inscription)) {

                foreach ($inscription as $inscriptions) {
                    $result['donnees'][strval($inscriptions->id)] = [
                        'id'                    => $inscriptions->id,
                        'matricule'             => $inscriptions->matricule,
                        'nom'                   => $inscriptions->nom,
                        'date_naiss'            => $inscriptions->date_naiss,
                        'lieu_naiss'            => $inscriptions->lieu_naiss,
                        'genre'                 => $inscriptions->genre,
                        'classe_precedent'      => $inscriptions->classe_precedent,
                        'classe_a_suivre'       => $inscriptions->classe_a_suivre,
                        'nom_pere'              => $inscriptions->nom_pere,
                        'contact_pere'          => $inscriptions->contact_pere,
                        'nom_mere'              => $inscriptions->nom_mere,
                        'contact_mere'          => $inscriptions->contact_mere,
                        'tuteur_legal'          => $inscriptions->tuteur_legal
                    ];
                }
            }
            $result['donnees'] = array_values($result['donnees']);
            return $result;
        } catch (\Exception $e) {
            Log::error('Inscription::lister a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
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
                'inscription' => []
            ];

            $inscription = Inscription::where('id', $this->id)->get();

            if (count($inscription)) {
                foreach ($inscription as $inscriptions) {
                    $result['inscription'][] = [
                        'id'                    => $inscriptions->id,
                        'matricule'             => $inscriptions->matricule,
                        'nom'                   => $inscriptions->nom,
                        'date_naiss'            => $inscriptions->date_naiss,
                        'lieu_naiss'            => $inscriptions->lieu_naiss,
                        'genre'                 => $inscriptions->genre,
                        'classe_precedent'      => $inscriptions->classe_precedent,
                        'classe_a_suivre'       => $inscriptions->classe_a_suivre,
                        'nom_pere'              => $inscriptions->nom_pere,
                        'contact_pere'          => $inscriptions->contact_pere,
                        'nom_mere'              => $inscriptions->nom_mere,
                        'contact_mere'          => $inscriptions->contact_mere,
                        'tuteur_legal'          => $inscriptions->tuteur_legal
                    ];
                }
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Inscription::lire a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }


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
                'matricule' => 'string',
            ];

            $validator = Validator::make($inputs, $rules);
            if (!$validator->passes()) {
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_VALIDATION';
                $result['erreurs'] = $validator->errors()->all();
                return $result;
            }

            $inscription = Inscription::where('matricule', $inputs['matricule'])
                ->where('id', '<>', $this->id)
                ->first();

            if (is_null($inscription)) {
                if (array_key_exists('matricule', $inputs)) {
                    $this->matricule = $inputs['matricule'];
                }
                if (array_key_exists('nom', $inputs)) {
                    $this->nom = $inputs['nom'];
                }
                if (array_key_exists('date_naiss', $inputs)) {
                    $this->date_naiss = $inputs['date_naiss'];
                }
                if (array_key_exists('lieu_naiss', $inputs)) {
                    $this->lieu_naiss = $inputs['lieu_naiss'];
                }
                if (array_key_exists('genre', $inputs)) {
                    $this->genre = $inputs['genre'];
                }
                if (array_key_exists('classe_precedent', $inputs)) {
                    $this->classe_precedent = $inputs['classe_precedent'];
                }
                if (array_key_exists('classe_a_suivre', $inputs)) {
                    $this->classe_a_suivre = $inputs['classe_a_suivre'];
                }
                if (array_key_exists('nom_pere', $inputs)) {
                    $this->nom_pere = $inputs['nom_pere'];
                }
                if (array_key_exists('contact_pere', $inputs)) {
                    $this->contact_pere = $inputs['contact_pere'];
                }
                if (array_key_exists('nom_mere', $inputs)) {
                    $this->nom_mere = $inputs['nom_mere'];
                }
                if (array_key_exists('contact_mere', $inputs)) {
                    $this->contact_mere = $inputs['contact_mere'];
                }
                if (array_key_exists('tuteur_legal', $inputs)) {
                    $this->tuteur_legal = $inputs['tuteur_legal'];
                }
                $this->save();

                Log::info('Inscription modifié.', ['id' => $this->id]);
            } else {
                Log::info('Erreur de modification d\'une inscription avec un libellé déjà utilisé.', ['entrees' => $inputs]);
                $result['code_http'] = 400;
                $result['code_message'] = 'ERR_LIBELLE_UTILISE';
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Inscription::modifier a échoué avec le message ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
        }
    }

    // supprimer
    public function supprimer($request): array
    {
        try {
            $inscription = Inscription::where("id", $this->id)->delete();

            return $inscription ? $this->success(true) : $this->error(false, $inscription);
        } catch (\Exception $e) {
            return $this->error(false, $e);
        }
    }
}
