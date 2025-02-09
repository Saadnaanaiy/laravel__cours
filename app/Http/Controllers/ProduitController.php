<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function afficherProduitInfo() {
        $produit_info = Produit::all();
        return view("produit", ["produits" => $produit_info]);
    }
}
