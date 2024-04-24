<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StatiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanierController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/boutique',[IndexController::class,'boutique']);
Route::get('/detail/{id}',[IndexController::class,'showdetail']);
Route::get('/panier',[IndexController::class,'panier']);

//Route pour recuperer les page de login et register 
Route::get('pageregister',[AuthController::class,'pageregister']);
Route::get('pagelogin',[AuthController::class,'pagelogin']);
 
//Route for categorie
Route::post('insertCategorie',[CategorieController::class,'insertCategorie']);
Route::post('/updatecategorie/{id}',[CategorieController::class,'updatecategorie']);
Route::get('/deletecategorie/{categorie}',[CategorieController::class,'deletecategorie']);
Route::get('/ajoutproduit',[ProduitController::class,'ajoutproduit']);

//Route for authantification
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

//route for produit 
Route::post('/insertproduit',[ProduitController::class,'insertproduit'])->name('insertproduit');
Route::get('/deleteproduit/{categorie}',[ProduitController::class,'deleteproduit']);
Route::get('/pageupdate/{id}',[ProduitController::class,'pageupdate']);
Route::post('/updatproduit',[ProduitController::class,'updateproduit']);


//route pour ajouter au panier 
Route::post('/ajoutpanier',[PanierController::class,'ajoutpanier']);

//route de la recherche
Route::post('/rechercher-produit', [ProduitController::class, 'searchProduit'])->name('produits.search');

//route recherche 
Route::get('/searchItem', [ProduitController::class, 'search']);
//route pour recuperer les categorie dans forme
Route::get('/categories', [ProduitController::class, 'showForm']);
Route::post('/filter', [ProduitController::class, 'filter'])->name('produits.filter');


