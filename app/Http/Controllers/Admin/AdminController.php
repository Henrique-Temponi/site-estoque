<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login.index');
    }

    public function verificar (Request $request)
    {   
        // dd($request);
        $credenciais = $request->only('email', 'password');
        // dd($credenciais);
        
        if (Auth::attempt($credenciais)) {
            
            $request->session()->flash('msg', [
                'mensagem' =>  'Login feito com sucesso',
                'class' => 'green'
            ]);

            return redirect()->route('admin.index');
        }

        
        $request->session()->flash('msg', [
            'mensagem' =>  'Erro: Confira os dados',
            'class' => 'red'
        ]);

        return redirect()->route('admin.login.index');
    }

    public function logout ()
    {
        Auth::logout();
        
        return redirect()->route('site.home');
    }

    public function index()
    {
        return view('admin.home');
    }
}
