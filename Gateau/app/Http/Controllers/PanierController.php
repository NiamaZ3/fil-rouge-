<?php

namespace App\Http\Controllers;

use App\Models\panier;
use Illuminate\Http\Request;


class PanierController extends Controller
{
    //
    public function showpanier(){
        $paniers = panier::all();
        return view('user.panier', compact('paniers'));
     }

    public function ajoutpanier(Request  $request){ 

        $panier = new panier();
        $panier->user_id = auth()->id();
        $panier->produit_id = $request->produit_id;
        $panier->quantite = $request->quantite;
        $panier->save();
        return redirect('/panier');
       }
       
}
