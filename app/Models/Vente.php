<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model {
    protected $table = 'ventes';
    protected $primaryKey = 'idvente';
    public $timestamps = true;

    protected $fillable = [
        'idclient',
        'idproduit',
        'quantite',
        'datevente'
    ];

    // Relation : Une vente appartient à un client
    public function client() {
        return $this->belongsTo('App\Models\Client', 'idclient');
        //l'attribut idclient dans $fillable représente un foreign key du Model Client
    }

    // Relation : Une vente concerne un produit
    public function produit() {
        return $this->belongsTo('App\Models\Produit', 'idproduit');
        //l'attribut idproduit dans $fillable représente un foreign key du Model Produit
    }
}
