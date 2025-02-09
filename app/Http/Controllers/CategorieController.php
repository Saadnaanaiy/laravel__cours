<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function afficherCategorieInfo() {
        $categorie_info = Categorie::all();
        return view("categorie", ["categories" => $categorie_info]);
    }
}
