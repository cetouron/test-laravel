<?php

namespace App\Http\Controllers;

use App\Models\Stars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StarsController extends Controller
{
    public function index(Request $request)
    {
        $stars = Stars::all();
        return view('stars.index', compact( 'stars'));

    }

    public function create()
    {
      return view('stars.create');
    }

    public function store(Request $request)
    {
        $this->validateData();

        $nameImg = $request->file("image")->store('images');

        $star = Stars::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'description' => $request->description,
            'photo_url' => $nameImg,
        ]);

        return redirect()->route('star.index');

    }

    public function edit(Stars $star)
    {
        return view('stars.edit', compact(  'star'));
    }

    public function update(Request $request, Stars $star)
    {
        $this->validateData();

        if($request->file("image") != null){
            $nameImg = $request->file("image")->store('images');
        } else $nameImg = $star->photo_url;

        $star->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'description' => $request->description,
            'photo_url' => $nameImg,
        ]);

        return redirect()->route('star.index');
    }

    public function destroy(Stars $produit)
    {
        $produit->delete();
        return redirect()->route('star.index');
    }

    public function deleteSelected(Request $request)
    {
        Stars::destroy($request->input('checkedStar'));
        return redirect()->route('star.index');
    }

    protected function validateData()
    {
        return request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
        ]);
    }
}
