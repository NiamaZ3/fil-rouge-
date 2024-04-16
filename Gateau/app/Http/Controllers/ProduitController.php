<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function showproduct(){
        return view('daschboard.produit');
    }

     public function ajoutproduit(){

        return view ('daschboard.ajoutproduit');
    }
    
//      public function addproduit(Request $request){
//         $name = $request->name;
//         $description = $request->description;
//         $prix = $request->prix;
//         $categorie = $request->categorie;
//         $image = $request->file('image');
//         $image_name =uniqid()."-".$image->getClientOriginalName();
//         $image->move(public_path('images'), $image_name);



//         $product = new Product();
//         $product->name = $name;
//         $product->description = $description;
//         $product->prix = $prix;
//         $product->categorie_id = $categorie;
//         $product->image = $image_name;
//         $product->save();
//         return redirect()->to('/page_produit');
// }


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

