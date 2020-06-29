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

        // dd($request);   
        
        
        if ($request->filled(['compania', 'origem', 'destino', 'horas'])) {
            
                // $registro = new Flight($request->except('horas'));
            $registro = new Flight($request->all());
            $registro->user_id = Auth::id();
            $registro->save();
        
            // if ()
        
            $request->session()->flash('msg', 'voo registrado com sucesso');
            return redirect()->action('site\RegistroController@index');
        }
        
        
        $request->session()->flash('msg', 'Erro: dados invalidos');
        return redirect()->route('site.novo');
        
        
        // $registro = new Flight($request->all());
        // $registro->user_id = Auth::id();
        // $registro->save();
        
        // $request->session()->flash('msg', 'voo registrado com sucesso');
        // return redirect()->action('site\RegistroController@index');

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

        $request->session()->flash('msg', 'voo atualizado com sucesso');
        return redirect()->action('site\RegistroController@index');
    }

    public function deletar($id)
    {
        Flight::find($id)->delete();

        return redirect()
            ->action('site\RegistroController@index')
            ->with('msg', 'Voo deletado');
    }

    public function pesquisar(Request $request)
    {
        // dd($request->input('horas'));
        // dd($request['horas']);
        // dd($request);

        // $registrosFiltrados = Flight::where([
        //     ['horas', '<=', $request->input("horas")],
        //     ['user_id', '=', Auth::id()],
        // ])->get();

        $registrosFiltrados = Flight::where([
            ['compania', '=', $request->input('compania')],
            ['user_id', '=', Auth::id()],
        ])->get();

        // dd($registrosFiltrados);

        return view('site.listar')->with('registros', $registrosFiltrados);
    }
}
