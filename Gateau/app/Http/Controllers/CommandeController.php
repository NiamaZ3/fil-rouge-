<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function showcommande(){
        return view ('daschboard.commande');
    }


    // public function addcommande(Request $request){
    //     $nom = $request->nom;
    //     $quantite = $request->quantite;
    //     $prix_total = $request->prix_total;
    //     $date_commande = $request->date_commande;

    //     $commande = new  Commande();
    //     $commande->nom = $nom;
    //     $commande->quantite = $quantite;
    //     $commande->prix_total = $prix_total;
    //     $commande->date_commande = $date_commande;

        
    // }
}