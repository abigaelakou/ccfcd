<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //
    public function create()
    {
        $niveau = Niveau::orderBy('id', 'desc')->get();
        return view('admin.formNiveau', ['classes' => $niveau]);
    }

    // Fonction de niveau
    public function store(Request $request)
    {
        $id = Niveau::where('id', $request->input('libelle'))->first();
        $niveau = Niveau::where('libelle', $request->input('libelle'))->first();

        if (is_null($niveau)) {
            $new_niveau = new Niveau();
            $new_niveau->created_at = now();
            $new_niveau->libelle = $request->input('libelle');
            $new_niveau->save();

            $niveaux = Niveau::orderBy('id', 'desc')->get();
            return view('admin.formNiveau', ['niveaux' => $niveaux]);
        } else {
            return 'nom déjà enregistré.';
        }
    }

    public function edit($id)
    {
        $niveaux = Niveau::orderBy('id', 'desc')->get();
        return view('admin.modifierNiveau', ['niveaux' => $niveaux], compact('niveau'));
    }

    public function update(Request $request, $id)
    {
        $niveau = Niveau::where('libelle', $request->input('libelle'))->where('id', '<>', $id)->first();
        if (is_null($niveau)) {
            $modif_niveau = Niveau::find($id);
            $modif_niveau->libelle = $request->input('libelle');
            $modif_niveau->update();
            return redirect()->view('admin.listeNiveau');
        } else {
            return 'libelle déjà utilié.';
        }
    }

    public function delete(Request $request, $id, Niveau $del_niveau)
    {
        $del_niveau = Niveau::FindOrFail($id);
        $del_niveau->supprimer($request);
        return response()->json(
            $del_niveau,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            $this->format
        );
    }
}