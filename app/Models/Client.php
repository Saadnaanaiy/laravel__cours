<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // Nom de la table dans la base de données
    protected $table = 'clients';

    // Clé primaire de la table
    protected $primaryKey = 'idclient';

    // Indique si les horodatages sont utilisés (created_at et updated_at)
    public $timestamps = true;

    // Les attributs qui peuvent être remplis de manière massive
    protected $fillable = [
        'nom', 'prenom'
    ];

    // Relation : Un client peut avoir plusieurs ventes
    public function ventes()
    {
        return $this->hasMany('App\Models\Vente', 'idclient');
//l'attribut idclient se trouve dans le Model Vente comme un foreign key pour $primaryKey = 'idclient' dans le Model Client
    }
}
