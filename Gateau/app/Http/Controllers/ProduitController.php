<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function showproduct(){
        $produits = produit::all();
        $categories = Categorie::all();

        return view('daschboard.produit', compact('produits', 'categories'));
    }

     public function ajoutproduit(){
        $categories = Categorie::all();
        return view ('daschboard.ajoutproduit' , compact('categories'));
    }


    public function pageupdate($idproduit){
        $produit = produit::findorFail($idproduit);
        $categories = Categorie::all();
        return view('daschboard.updateproduit',compact('produit','categories'));
    }



    public function insertproduit(Request $request){
        
        // $imagePath = null;
        if ($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images');
        }
        

        $produit = new produit();
        $produit->name = $request->name; 
        $produit->quantite = $request->quantite;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->categorie_id = $request->categorie_id;
        $produit->image = $imagePath;
        $produit->save();
        return redirect()->to('/pageproduit');
    }

    public function deleteproduit($produit){

        $produit = produit::findOrFail($produit);
        $produit->delete();
        return redirect('/pageproduit');
    }




    public function updateproduit(Request $request)
     {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required|string',
            'prix' => 'required',
            'categorie_id' => 'required',
            'quantite' => 'required',
            'produit_id'=>'required',
             ]);
             $produit = produit::find($request->produit_id);
             $produit->name = $request->name;
             $produit->description = $request->description;
             $produit->prix = $request->prix;
             $produit->categorie_id = $request->categorie_id;
             $produit->quantite = $request->quantite;

             if ($request->hasFile('image')){
                $imagePath = $request->file('image')->store('images');
                $produit->image = $imagePath;

            }
              $produit->update();
         return redirect('/pageproduit')->with('success', 'Event added successfully.');
    }


    
    public function search(Request $request)
    {
        $query = $request->input('search');
        
        $produits = produit::where('name', 'like', '%'.$query.'%')->get();
        
        return view('user.search', compact('produits'));
    }
  

    public function filter(Request $request , $id)

    {
        
        $produits = produit::where('categorie_id' , $id)->get();
        // dd($produits);
        $categories = Categorie::all();
        return view('user.boutique', compact('produits' , 'categories'));
    }
 }

