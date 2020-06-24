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

    public function create(Request $request)
    {
        // dd($request);
        $registro = new Flight();
        $registro->user_id = Auth::id();
        $registro->compania = $request['compania'];
        $registro->origem = $request['origem'];
        $registro->destino = $request['destino'];
        $registro->horas = $request['horas'];
        $registro->save();

        return redirect()->action('RegistroController@index');
    }
}
