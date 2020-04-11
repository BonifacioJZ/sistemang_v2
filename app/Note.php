<?php

namespace App;

use App\Expedient;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Variables

    protected $fillable = [
        'titulo',
        'nota',
        'date',
        'hora',
        'expedient_id',
        'user_id'
    ];

    //funciones

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expedient()
    {


        return $this->belongsTo(Expedient::class);
    }
}
