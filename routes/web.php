<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VenteController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("homepage");



Route::get("clients", [ClientController::class, 'AfficherClientInfo'])->name("clients.list");

Route::get("clients/ajouter", function () {
    return view("forms.createClient");
});
Route::get("clients/supprimer/{id}", [ClientController::class, "supprimer"])->name("supprimerClient.list");

Route::get("clients/modifier/{id}", [ClientController::class, "modifier"])->name("modifierClient.list");
Route::post("clients/modifier/{id}", [ClientController::class, "mettreAJour"])->name("mettreAJour.list");

Route::post("clients/ajouter", [ClientController::class, "ajouter"])->name("ajouterClient.list");

Route::get("categories", [CategorieController::class, 'afficherCategorieInfo'])->name("categories.list");

Route::get("produits", [ProduitController::class, "afficherProduitInfo"])->name("produits.list");

Route::get("ventes", [VenteController::class, "afficherVenteInfo"])->name("ventes.list");
