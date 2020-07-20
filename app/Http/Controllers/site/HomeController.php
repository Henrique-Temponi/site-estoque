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

        return view('site.index')->with('voo', $voo);
    }
}
