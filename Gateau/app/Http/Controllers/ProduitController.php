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

        return view('daschboard.produit', compact('produits'));
    }

     public function ajoutproduit(){
        $categories = Categorie::all();
        return view ('daschboard.ajoutproduit' , compact('categories'));
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















// public function page_updateproduit(Request $request){
//     $id = $request->id;
//     $getproduct = new Product();
    
//     $product = $getproduct->find($id);
//     // $getcategory = new Category();
//     $categories = $getcategorie->all();
//     return view('Update.update-produit', compact('product' , 'categories'));
// }

// public function updateproduit(Request $request){
//     $id = $request->id;
//     $name = $request->name;
//     $description = $request->description;
//     $prix = $request->prix;
//     $category = $request->category;
//     $image = $request->file('image');
    // if(!empty($image)){
    //     $image_name = uniqid() . "-" . $image->getClientOriginalName();
    //     $image->move(public_path('images'), $image_name);
    // }
 }

