<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\categorie;
//use App\Image;
//use Illuminate\Support\Facades\Response;
//use Images;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
         
        $categories = categorie::all()->toArray();
        return view('categories_de_produits.index' , compact('categories'));
        
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
    {  $this->validate($request, [
                'Image'         =>  'required',
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
/*
         $categorie = new categorie();
                 
                 $categorie->Nom                 = $request->input('Nom');
                 $categorie->Description         = $request->input('Description');
                 $categorie->Slug                = $request->input('Slug');
                 $categorie->Categorie_parente   = $request->input('Categorie_parente');
        
        if ($request->hasfile('Image')){
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $categorie->Image = '';
        }
*/
         $categorie->save();
         return redirect()->route('categories_de_produits.index')->with('success', 'Votre catégorie est ajoutée avec succès');
         

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
