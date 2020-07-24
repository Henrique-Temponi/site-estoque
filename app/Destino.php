<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $fillable = [
        'nome', 'abreviacao',
    ];

    public function flight()
    {
        return $this->hasMany('App\Flight');
    }
}
