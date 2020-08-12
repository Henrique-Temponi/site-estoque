<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'voo', 'destino_id', 'compahia_id', 'turno',
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'flight_user');
    }

    public function destino()
    {
        return $this->belongsTo('App\Destino');
    }

    public function compahia()
    {
        return $this->belongsTo('App\Compahia');
    }
}
