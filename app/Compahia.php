<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compahia extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function flight()
    {
        return $this->hasMany('App\Flight');
    }
}
