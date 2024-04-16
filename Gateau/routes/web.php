<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StatiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.categorie ');
// });
//routepour recupérer les pages de daschboard
Route::get('pagecategorie',[CategorieController::class,'showcategorie']);
Route::get('pageproduit',[ProduitController::class,'showproduct']);
Route::get('pagecommande',[CommandeController::class,'showcommande']);
Route::get('pagestati',[StatiController::class,'showstatistique']);
//route pour recupérer les pages home
Route::get('showindex',[IndexController::class,'showindex']);


 
//Route for categorie
Route::post('insertCategorie',[CategorieController::class,'insertCategorie']);
Route::post('/updatecategorie/{id}',[CategorieController::class,'updatecategorie']);
Route::get('/deletecategorie/{categorie}',[CategorieController::class,'deletecategorie']);
Route::get('/ajoutproduit',[ProduitController::class,'ajoutproduit']);
