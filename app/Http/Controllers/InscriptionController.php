<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    // 

    public function create()
    {
        $inscription = Inscription::orderBy('id', 'desc')->get();
        return view('formInscription', ['inscriptions' => $inscription]);
    }

    // Fonction de nouvelle inscription
    public function store(Request $request)
    {
        $id = Inscription::where('id', $request->input('matricule'))->first();
        $inscription = Inscription::where('matricule', $request->input('matricule'))->first();

        if (is_null($inscription)) {
            $nouvelle_inscription = new Inscription();
            $nouvelle_inscription->created_at = now();
            $nouvelle_inscription->matricule = $request->input('matricule');
            $nouvelle_inscription->nom = $request->input('nom');
            $nouvelle_inscription->date_naiss = $request->input('date_naiss');
            $nouvelle_inscription->lieu_naiss = $request->input('lieu_naiss');
            $nouvelle_inscription->genre = $request->input('genre');
            $nouvelle_inscription->classe_precedent = $request->input('classe_precedent');
            $nouvelle_inscription->classe_a_suivre = $request->input('classe_a_suivre');
            $nouvelle_inscription->nom_pere = $request->input('nom_pere');
            $nouvelle_inscription->contact_pere = $request->input('contact_pere');
            $nouvelle_inscription->nom_mere = $request->input('nom_mere');
            $nouvelle_inscription->contact_mere = $request->input('contact_mere');
            $nouvelle_inscription->tuteur_legal = $request->input('tuteur_legal');
            $nouvelle_inscription->save();

            $inscriptions = Inscription::orderBy('id', 'desc')->get();
            return view('formInscription', ['inscriptions' => $inscriptions]);
        } else {
            return 'matricule déjà enregistré.';
        }
    }

    public function edit($id)
    {
        $inscriptions = Inscription::orderBy('id', 'desc')->get();
        // $inscription = Inscription::where('id', $id)->first();
        return view('modifierInscription', ['inscriptions' => $inscriptions], compact('inscription'));
    }

    public function update(Request $request, $id)
    {
        $matricule_el = Inscription::where('matricule', $request->input('matricule'))->where('id', '<>', $id)->first();
        if (is_null($matricule_el)) {
            $modif_inscription = Inscription::find($id);
            $modif_inscription->matricule = $request->input('matricule');
            $modif_inscription->nom = $request->input('nom');
            $modif_inscription->date_naiss = $request->input('date_naiss');
            $modif_inscription->lieu_naiss = $request->input('lieu_naiss');
            $modif_inscription->genre = $request->input('genre');
            $modif_inscription->classe_precedent = $request->input('classe_precedent');
            $modif_inscription->classe_a_suivre = $request->input('classe_a_suivre');
            $modif_inscription->nom_pere = $request->input('nom_pere');
            $modif_inscription->contact_pere = $request->input('contact_pere');
            $modif_inscription->nom_mere = $request->input('nom_mere');
            $modif_inscription->contact_mere = $request->input('contact_mere');
            $modif_inscription->tuteur_legal = $request->input('tuteur_legal');
            $modif_inscription->update();
            return redirect()->view('listeInscrit');
        } else {
            return 'libelle déjà utilié.';
        }
    }

    public function delete(Request $request, $id, Inscription $del_inscription)
    {
        $del_inscription = Inscription::FindOrFail($id);
        $del_inscription->supprimer($request);
        return response()->json(
            $del_inscription,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            $this->format
        );
    }
}
