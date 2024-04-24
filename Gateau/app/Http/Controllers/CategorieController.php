<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function showcategorie(){
        $categories = Categorie::all();
        return view('daschboard.categorie',compact('categories'));
    }

    public function showcatinproduit(){
        $categories = Categorie::all();
        return view('daschboard.produit',compact('categories'));
    }
    
    public function showForm(){
        $categories = Categorie::all();
        return view('user.boutique', compact('categories'));
    }
    

     public function insertCategorie(Request $request){

        $request->validate([
            'name' => 'required',
        ]);
        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();
        return redirect('/pagecategorie');
        }
        
    public function deletecategorie($categorie){

        $categorie = Categorie::findOrFail($categorie);
        $categorie->delete();
        return redirect('/pagecategorie');
    }

    public function updatecategorie(Request $request, $id){
 
        $name = $request->name;
        $getcategories = new Categorie();
        $categorie = $getcategories->find($id);
        $categorie->name = $name;
        $categorie->update();
        return redirect('/pagecategorie');    
    }


}
