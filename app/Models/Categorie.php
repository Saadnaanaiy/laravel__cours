<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {
    protected $table = 'categories';
    protected $primaryKey = 'idcategorie';
    public $timestamps = true;

    protected $fillable = [
        'nom',
        'description'
    ];

    // Relation : Une catégorie peut avoir plusieurs produits
    public function produits() {
        return $this->hasMany('App\Models\Produit', 'idcategorie');
        //Model produit contient l'attribut  'idcategorie' (foreign key) qui $primaryKey = 'idcategorie' dans le Model Categorie
    }
}
