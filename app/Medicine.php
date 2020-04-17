<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'nombre',
        'codigo',
        'formula',
        'dosis',
        'laboratorio',
        'description',
        'disponible'
    ];
}
