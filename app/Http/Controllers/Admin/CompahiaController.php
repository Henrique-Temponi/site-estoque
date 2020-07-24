<?php

namespace App\Http\Controllers\Admin;

use App\Compahia;
use App\Http\Controllers\Controller;
use App\Http\Requests\Compahia as RequestsCompahia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompahiaController extends Controller
{
    public function listar()
    {
        $registro = Compahia::all();

        return view('admin.compahia.listar')->with('registro', $registro);
    }
    
    public function adicionar()
    {
        return view('admin.compahia.adicionar');
    }

    public function atualizar(RequestsCompahia $request)
    {

        // dd($request);

        Compahia::create($request->all())->save();

        $request->session()->flash('msg', [
            'mensagem' => 'Destino Adicionado com sucesso',
            'class' => 'green'
        ]);
        

        return redirect()->route('admin.compahias.listar');
    }
    
    public function editar($id)
    {
        $registro = Compahia::find($id);

        return view('admin.compahia.editar')->with('registro', $registro);
    }

    public function salvar(RequestsCompahia $request, $id)
    {
        Compahia::find($id)->update($request->all());

        $request->session()->flash('msg', [
            'mensagem' => 'Compahia editada com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.compahias.listar');
    }

    public function deletar($id)
    {
        Compahia::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Voo deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.compahias.listar');
    }
}
