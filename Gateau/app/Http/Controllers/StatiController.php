<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\produit;
use App\Models\User;
use Illuminate\Http\Request;

class StatiController extends Controller
{
    //
    public function showstatistique(){
        $totalproduit = produit::count();
        $totalcategorie = Categorie::count();
        $totalusers = User::count();
        return view('daschboard.statistique', compact( 'totalproduit', 'totalcategorie','totalusers'));
    }
    
}
