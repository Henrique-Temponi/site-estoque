<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function listar()
    {
        $registros = User::all();

        // dd($voos[0]->user()->count());

        return view('admin.usuario.listar')->with('registros', $registros);
    }
    
    public function adicionar()
    {
        return view('admin.usuario.adicionar');
    }

    public function deletar($id)
    {
        User::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Usuario deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.usuarios.listar');
    }
}
