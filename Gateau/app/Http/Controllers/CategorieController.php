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

 
    // public function pageUpdateCategory(Request $request){
    //     $id= $request->id;
    //     $getcategories = new Categorie();
    //     $category = $getcategories->find($id);
    //     return view ('update.categorie' , compact('categorie'));
    // }

    public function updatecategorie(Request $request, $id){
 
        $name = $request->name;
        $getcategories = new Categorie();
        $categorie = $getcategories->find($id);
        $categorie->name = $name;
        $categorie->update();
        return redirect('/pagecategorie');    
    }

}
