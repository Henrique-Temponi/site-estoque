<?php

namespace App\Http\Controllers\site;

use App\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        // dd($id);

        $registros = Flight::where('user_id', [$id])->get();

        return view('site.listar')->with('registros', $registros);
    }

    public function create(Request $request)
    {
        // dd($request);
        // $registro = new Flight();
        // $registro->user_id = Auth::id();
        // $registro->compania = $request['compania'];
        // $registro->origem = $request['origem'];
        // $registro->destino = $request['destino'];
        // $registro->horas = $request['horas'];
        // $registro->save();

        $registro = new Flight($request->all());
        $registro->user_id = Auth::id();
        $registro->save();

        return redirect()->action('site\RegistroController@index');
    }

    public function editar($id)
    {
        $registro = Flight::find($id);

        return view('site.editar')->with('registro', $registro);
    }

    public function atualizar(Request $request, $id)
    {
        // $novoRegistro = new Flight($request->all());
        // $registro = Flight::find($id);

        $registro = Flight::find($id)->update($request->all());
        // $registro->save();

        return redirect()->action('site\RegistroController@index');
    }

    public function deletar($id)
    {
        Flight::find($id)->delete();

        return redirect()->action('site\RegistroController@index');
    }
}
