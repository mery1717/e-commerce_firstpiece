<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories_de_produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'Image' ,
                'Nom'           => 'required' ,
                'Description'   => 'required' ,
                'Slug'          => 'required' ,
                'Categorie_parente' 
        ]);

        $categorie = new categorie([
                 'Image'               => $request->get('Image'),
                 'Nom'                 => $request->get('Nom'),
                 'Description'         => $request->get('Description'),
                 'Slug'                => $request->get('Slug'),
                 'Categorie_parente'   => $request->get('Categorie_parente')
        ]);

         $categorie->save();
         return redirect()->route('categories_de_produits.create')->with('success', 'Votre catégorie est ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
