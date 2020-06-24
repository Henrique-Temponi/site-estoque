<?php

namespace App\Http\Controllers\site;

use App\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index ()
    {
        $id = Auth::id();
        // dd($id);

        $registros = Flight::where('user_id', [$id])->get();

        return view('site.listar')->with('registros', $registros);
    }
}
