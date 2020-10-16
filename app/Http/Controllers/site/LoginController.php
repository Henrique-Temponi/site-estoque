<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\User as RequestsUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function login()
    {
        return view('web.login.index');
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

        $usuario = new User($request->except('password'));
        $usuario->password = bcrypt($request->password);
        $usuario->admin = FALSE;
        // $usuario->save();

        $request->session()->flash('msg', [
            'mensagem' =>  'Usuario criado com sucesso',
            'class' => 'green white-text'
        ]);
        
        $time = Carbon::now();
        DB::table('user_amount_month')->increment($time->shortEnglishMonth);

        return redirect()->route('site.login');
    }
}
