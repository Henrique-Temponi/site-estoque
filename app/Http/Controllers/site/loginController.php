<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function verificar (Request $request)
    {   
        // dd($request);
        $credenciais = $request->only('name', 'password');
        
        if (Auth::attempt($credenciais)) {
            
            $request->session()->flash('msg', [
                'mensagem' =>  'Login feito com sucesso',
                'class' => 'green'
            ]);

            return redirect()->route('site.home');
        }

        
        $request->session()->flash('msg', [
            'mensagem' =>  'Erro: Confira os dados',
            'class' => 'red'
        ]);

        return redirect()->route('site.login');
    }

    public function logout ()
    {
        Auth::logout();
        
        return redirect()->route('site.home');
    }

    public function create(Request $request)
    {
        // dd($request);

        if(strlen($request['name']) > 0 && strlen($request['password']) > 0){
            
            // User::create($request->all())->save();
            $usuario = new User();
            $usuario->name = $request['name'];
            $usuario->password = bcrypt($request['password']);
            $usuario->save();
            
            $request->session()->flash('msg', 'Usuario criado com sucesso');
            return redirect()->route('site.login');
        }

        $request->session()->flash('msg', 'Erro: verifique os dados');
        return redirect()->route('site.login.novo');
    }
}
