<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'companhia', 'origem', 'destino', 'horas'
    ];
}
