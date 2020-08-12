<?php

namespace App\Http\Controllers\site;

use App\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $voo = Flight::all();

        $turno = [
            1 => 'Manha',
            2 => 'Tarde',
            3 => 'Noite',
        ];

        return view('web.site.index')
            ->with('voo', $voo)
            ->with('turno', $turno);
    }
}
