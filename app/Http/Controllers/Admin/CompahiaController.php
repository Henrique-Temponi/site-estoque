<?php

namespace App\Http\Controllers\Admin;

use App\Compahia;
use App\Http\Controllers\Controller;
use App\Http\Requests\Compahia as RequestsCompahia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompahiaController extends Controller
{
    public function listar()
    {
        $this->authorize('admin-painel', Auth::user());
        $registro = Compahia::all();

        return view('admin.compahia.listar')->with('registro', $registro);
    }
    
    public function adicionar()
    {
        $this->authorize('admin-painel', Auth::user());
        return view('admin.compahia.adicionar');
    }

    public function atualizar(RequestsCompahia $request)
    {

        // dd($request);
        $this->authorize('admin-painel', Auth::user());

        Compahia::create($request->all())->save();

        $request->session()->flash('msg', [
            'mensagem' => 'Destino Adicionado com sucesso',
            'class' => 'green'
        ]);
        

        return redirect()->route('admin.compahias.listar');
    }
    
    public function editar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        $registro = Compahia::find($id);

        return view('admin.compahia.editar')->with('registro', $registro);
    }

    public function salvar(RequestsCompahia $request, $id)
    {
        $this->authorize('admin-painel', Auth::user());
        Compahia::find($id)->update($request->all());

        $request->session()->flash('msg', [
            'mensagem' => 'Compahia editada com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.compahias.listar');
    }

    public function deletar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        Compahia::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Voo deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.compahias.listar');
    }
}
