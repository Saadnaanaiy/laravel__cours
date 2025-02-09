<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller {
    public function afficherVenteInfo() {
        $vente_info = Vente::all();
        return view("vente", ['ventes' => $vente_info]);
    }
}
