<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'companhia', 'origem', 'destino', 'horas'
    ];

    public function airports()
    {
        return $this->belongsToMany('App\Airport', 'airports_flights');
    }
}
