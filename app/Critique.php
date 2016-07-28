<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critique extends Model
{
    protected $table = 'critiques';
    protected $fillable = [
        'vote', 'commentaire', 'id_film', 'id_utilisateur'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
