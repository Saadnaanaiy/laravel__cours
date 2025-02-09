<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model {
    protected $table = 'produits';
    protected $primaryKey = 'idproduit';
    public $timestamps = true;

    protected $fillable = [
        'idcategorie',
        'nom',
        'prix',
        'quantiteStock',
        'marque'
    ];

    // Relation : Un produit appartient à une catégorie
    public function categorie() {
        return $this->belongsTo('App\Models\Categorie', 'idcategorie');
        //'attribut idcategorie  dans  $fillable est un foreign key du Model Categorie
    }

    // Relation : Un produit peut avoir plusieurs ventes
    public function ventes() {
        return $this->hasMany('App\Models\Vente', 'idproduit');
        // l'attribut $primaryKey = 'idproduit' se trouve comme un foreign key dans le Model Vente
    }
}
