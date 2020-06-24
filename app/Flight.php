<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'compania', 'origem', 'destino', 'horas'
    ];
}
