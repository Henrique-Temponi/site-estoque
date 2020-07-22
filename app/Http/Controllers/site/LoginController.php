<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\User as RequestsUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('web.login.index');
    }



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

    public function registrar()
    {
        return view('web.login.novo');
    }

    public function create(RequestsUser $request)
    {
        // dd($request);

        // $request->validate([
        //     'email' => ['required'],
        //     'password' => ['required'],
        // ]);

        

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
