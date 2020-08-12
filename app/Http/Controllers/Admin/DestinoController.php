<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\Http\Controllers\Controller;
use App\Http\Requests\Destino as RequestsDestino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DestinoController extends Controller
{
    public function listar()
    {
        $this->authorize('admin-painel', Auth::user());
        $registro = Destino::all();

        return view('admin.destino.listar')->with('registro', $registro);
    }
    
    public function adicionar()
    {
        $this->authorize('admin-painel', Auth::user());
        return view('admin.destino.adicionar');
    }

    public function atualizar(RequestsDestino $request)
    {

        // dd($request);
        $this->authorize('admin-painel', Auth::user());

        Destino::create($request->all())->save();

        $request->session()->flash('msg', [
            'mensagem' => 'Destino Adicionado com sucesso',
            'class' => 'green'
        ]);
        

        return redirect()->route('admin.destinos.listar');
    }
    
    public function editar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        $registro = Destino::find($id);

        return view('admin.destino.editar')->with('registro', $registro);
    }

    public function salvar(RequestsDestino $request, $id)
    {
        $this->authorize('admin-painel', Auth::user());
        Destino::find($id)->update($request->all());

        $request->session()->flash('msg', [
            'mensagem' => 'Destino editado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.destinos.listar');
    }

    public function deletar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        
        $destino = Destino::find($id);

        $destinoFlights = $destino->flight;

        foreach ($destinoFlights as $flight) {
            
            if($flight->user != null) {
                $flight->user()->detach();
                // dd($flight->user);
            }
        }

        $destino->delete();

        Session::flash('msg', [
            'mensagem' => 'Destino deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.destinos.listar');
    }
}
