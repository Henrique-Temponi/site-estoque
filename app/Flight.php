<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'voo', 'destino'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'flight_user');
    }
}
