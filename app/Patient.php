<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'telefono',
        'colonia',
        'ciudad',
        'curp',
        'fecha_de_nacimiento'
    ];
}
