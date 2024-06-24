<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produits::paginate(8);
        return view('store.index',[
            'produits' => $produits
        ]);
    }

    public function produits(){
        $all_produits = Produits::all();
        return view('store.shop',[
            'all_produits' => $all_produits
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $fields = $request->validate([
        'titre' => 'required',
        'prix' => 'required',
        'image' => 'required|image',
        'description' => 'required|min:10',
        'stocks' => 'required'
       ]);

       $fields['image'] = $request->file('image')->store('produits','public');
       Produits::create($fields);
       return redirect()->route('produits.index')->with('succes','Le produit est ajoutée');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produits $produits)
    {
        return view('store.show',compact('produits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produits $produits)
    {
        return view('produits.edit',[
            'produits' => $produits
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produits $produits)
    {
        $fields = $request->validate([
            'titre' => 'nullable' ,
            'prix' => 'nullable' ,
            'image' => 'nullable|image' ,
            'description' => 'nullable' ,
            'stocks' => 'nullable'
        ]);
        if($request->hasFile('image')){
            $fields['image'] = $request->file('image')->store('produits','public');
        }
        $produits->update($fields);
        return redirect()->route('produits.index')->with('edit','Le produit a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produits $produits)
    {
        $produits->delete();
        return redirect()->route('produits.index')->with('delete','Le produit a été supprimé');
    }
}
