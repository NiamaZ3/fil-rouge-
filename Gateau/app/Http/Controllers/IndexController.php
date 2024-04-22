<?php

namespace App\Http\Controllers;

use App\Models\panier;
use App\Models\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function showindex(){
        return view('user.index');
    }

    public function boutique(){
         $produits = produit::all();
        return view('user.boutique', compact('produits'));
 }
  
 public function showdetail($id){
    
    $produit = produit::find($id);
    return view('user.detail', compact('produit'));
 }
   public function panier(){
      $user_id = 2 ; 

      $panier = DB::table('paniers')
            ->join('produits', 'produits.id', '=', 'paniers.produit_id')
            ->select('paniers.*', 'produits.name', 'produits.prix')
            ->where('paniers.user_id', '=', 2)
            ->get();


      return view('user.panier' , compact('panier'));
      // return response()->json($panier);
   }
}
