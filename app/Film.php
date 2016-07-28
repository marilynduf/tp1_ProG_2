<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = [
        'titre', 'annee', 'image','duree', 'synopsis', 'acteurs', 'id_classement'
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
