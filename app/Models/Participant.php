<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = "participants";
    protected $fillable = [
        'id_competition',
        'name',
        'email'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class, "id_competition");
    }
}
