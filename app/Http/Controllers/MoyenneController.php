<?php

namespace App\Http\Controllers;

use App\Models\Moyenne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoyenneController extends Controller
{
    //
    public function create()
    {
        $moyenne = Moyenne::orderBy('id', 'desc')->get();
        return view('admin.formAjoutMoyenne', ['moyenne' => $moyenne]);
    }

    // Fonction de moyenne
    public function store(Request $request)
    {
        $id = Moyenne::where('id', $request->input('matricule'))->first();
        $moyenne = moyenne::where('matricule', $request->input('matricule'))->first();

        if (is_null($moyenne)) {
            $new_moy = new Moyenne();
            $new_moy->created_at = now();
            $new_moy->matricule = $request->input('matricule');
            $new_moy->periode = $request->input('periode');
            $new_moy->rang = $request->input('rang');
            $new_moy->annee = $request->input('annee');
            $new_moy->moy = $request->input('moy');
            $new_moy->save();

            $moyennes = Moyenne::orderBy('id', 'desc')->get();
            return view('admin.formAjoutMoyenne', ['moyennes' => $moyennes]);
        } else {
            return 'moyenne déjà enregistrée.';
        }
    }

    public function edit($id)
    {
        $moyennes = Moyenne::orderBy('id', 'desc')->get();
        return view('admin.modifierMoyenne', ['moyennes' => $moyennes], compact('moyenne'));
    }

    public function update(Request $request, $id)
    {
        $moyenne = Moyenne::where('libelle', $request->input('libelle'))->where('id', '<>', $id)->first();
        if (is_null($moyenne)) {
            $modif_moyenne = Moyenne::find($id);
            $modif_moyenne->matricule = $request->input('matricule');
            $modif_moyenne->periode = $request->input('periode');
            $modif_moyenne->rang = $request->input('rang');
            $modif_moyenne->annee = $request->input('annee');
            $modif_moyenne->moy = $request->input('moy');
            $modif_moyenne->update();
            return redirect()->view('admin.modifierMoyenne');
        } else {
            return 'libelle déjà utilié.';
        }
    }


    public function delete(Request $request, $id, Moyenne $del_moyenne)
    {
        $del_moyenne = Moyenne::FindOrFail($id);
        $del_moyenne->supprimer($request);
        return response()->json(
            $del_moyenne,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            $this->format
        );
    }

    public function recherche_moy(Request $request)
    {

        $seach = $request['recherche'];
        return $rech = DB::table('moyenne')
            ->where('matricule', 'like', "%$seach%")
            ->get();
    }
}
