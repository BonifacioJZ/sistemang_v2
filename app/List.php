<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;
class List extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
