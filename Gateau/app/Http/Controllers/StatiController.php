<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatiController extends Controller
{
    //
    public function showstatistique(){
        return view('daschboard.statistique');
    }
}
