<?php

namespace App\Http\Controllers\Admin;

use App\Flight;
use App\Http\Controllers\Controller;
use App\Http\Requests\Voo as RequestVoo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $voos_quantidades = Flight::all()->count();
        $user_quantidades = User::all()->count();

        return view('admin.home')
            ->with('voos_quantidade', $voos_quantidades)
            ->with('user_quantidade', $user_quantidades);
    }

    public function listar()
    {
        $voos = Flight::all();

        // dd($voos[0]->user()->count());

        return view('admin.voo.listar')->with('voos', $voos);
    }
    
    public function adicionar()
    {
        return view('admin.voo.adicionar');
    }

    public function atualizar(RequestVoo $request)
    {
        Flight::create($request->all())->save();

        $request->session()->flash('msg', [
            'mensagem' => 'Voo Adicionado com sucesso',
            'class' => 'green'
        ]);
        

        return redirect()->route('admin.voos.listar');
    }
    
    public function editar($id)
    {
        $voo = Flight::find($id);

        return view('admin.voo.editar')->with('voo', $voo);
    }

    public function salvar(RequestVoo $request, $id)
    {
        Flight::find($id)->update($request->all());

        $request->session()->flash('msg', [
            'mensagem' => 'Voo editado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.voos.listar');
    }

    public function deletar($id)
    {
        Flight::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Voo deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.voos.listar');
    }
}
