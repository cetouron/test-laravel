<?php

namespace App\Http\Controllers;

use App\Models\Stars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StarsController extends Controller
{

    //Index des stars créés
    public function index(Request $request)
    {
        $stars = Stars::all();
        return view('stars.index', compact( 'stars'));

    }

    //Lien vers page de création
    public function create()
    {
      return view('stars.create');
    }

    //Enregistrer la star
    public function store(Request $request)
    {
        $this->validateData();     //Valider les champs

        $nameImg = $request->file("image")->store('images');     //Enregistrer l'image

        Stars::create([     //Enregistrer la star
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'description' => $request->description,
            'photo_url' => $nameImg,
        ]);

        return redirect()->route('star.index');     //Renvoyer vers l'index

    }

    //Page d'édition de la star
    public function edit(Stars $star)
    {
        return view('stars.edit', compact(  'star'));
    }

    //Mettre à jour la star
    public function update(Request $request, Stars $star)
    {
        $this->validateData(); //Valider les champs

        //Si le champs image est rempli
        if($request->file("image") != null){
            $nameImg = $request->file("image")->store('images'); //Nouvelle photo
        } else $nameImg = $star->photo_url; //Sinon on garde la même

        $star->update([ //MAJ de la star
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'description' => $request->description,
            'photo_url' => $nameImg,
        ]);

        return redirect()->route('star.index'); //Lien liste des stars
    }

    public function destroy(Stars $produit) //Supprimer la star
    {
        $produit->delete();
        return redirect()->route('star.index');
    }

    public function deleteSelected(Request $request) //Supprimer les stars selectionnés
    {
        Stars::destroy($request->input('checkedStar'));
        return redirect()->route('star.index');
    }

    protected function validateData() //Fonction de validation
    {
        return request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
        ]);
    }
}
