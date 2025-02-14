<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = "competitions";
    protected $primaryKey = "id_competition";
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date'
    ];

    public function participants() {
        return $this->hasMany(Participant::class, 'id_competition');
    }
}
