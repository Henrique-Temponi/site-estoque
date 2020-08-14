<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function listar()
    {
        $this->authorize('admin-painel', Auth::user());
        $registros = User::all();

        // dd($voos[0]->user()->count());

        return view('admin.usuario.listar')->with('registros', $registros);
    }

    public function deletar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        User::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Usuario deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.usuarios.listar');
    }
}
