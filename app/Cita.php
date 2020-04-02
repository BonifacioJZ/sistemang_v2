<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Cita extends Model
{

    protected $fillable = [
        'title', 'descripcion', 'fecha', 'hora_de_inicio', 'hora_de_finalizacion', 'status', 'user_id', 'medic_id', 'area_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
