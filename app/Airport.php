<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    
    public function flights()
    {
        return $this->belongsToMany('App\Flight','airports_flights');
    }
}
