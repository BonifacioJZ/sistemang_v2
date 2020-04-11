<?php

namespace App;

use App\User;
use App\Patient;
use Illuminate\Database\Eloquent\Model;
use App\Medicine;

class Expedient extends Model
{
    // Variables
    protected $fillable = [
        'pulso',
        'respiracion',
        'temperatura',
        'presion_d',
        'presion_s',
        'patient_id',
        'user_id',
        'date',
        'time'
    ];
    //funciones


    public function medicines()
    {
        return $this->belongsToMany(Medicine::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
