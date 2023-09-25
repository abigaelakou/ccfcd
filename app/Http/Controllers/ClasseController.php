<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //
    public function create()
    {
        $classe = Classe::orderBy('id', 'desc')->get();
        return view('admin.formClasse', ['classes' => $classe]);
    }

    // Fonction de nouvelle classe
    public function store(Request $request)
    {
        $id = Classe::where('id', $request->input('libelle'))->first();
        $classe = Classe::where('libelle', $request->input('libelle'))->first();

        if (is_null($classe)) {
            $nouvelle_classe = new Classe();
            $nouvelle_classe->created_at = now();
            $nouvelle_classe->libelle = $request->input('libelle');
            $nouvelle_classe->save();

            $classes = Classe::orderBy('id', 'desc')->get();
            return view('admin.formClasse', ['classes' => $classes]);
        } else {
            return 'nom déjà enregistré.';
        }
    }

    public function edit($id)
    {
        $classes = Classe::orderBy('id', 'desc')->get();
        // $classe = Classe::where('id', $id)->first();
        return view('admin.modifierClasse', ['classes' => $classes], compact('classe'));
    }

    public function update(Request $request, $id)
    {
        $classe = Classe::where('libelle', $request->input('libelle'))->where('id', '<>', $id)->first();
        if (is_null($classe)) {
            $modif_classe = Classe::find($id);
            $modif_classe->libelle = $request->input('libelle');
            $modif_classe->update();
            return redirect()->view('admin.listClasse');
        } else {
            return 'libelle déjà utilié.';
        }
    }

    public function delete(Request $request, $id, Classe $del_classe)
    {
        $del_classe = Classe::FindOrFail($id);
        $del_classe->supprimer($request);
        return response()->json(
            $del_classe,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            $this->format
        );
    }
}
