<?php

namespace App\Http\Controllers\Usuario;

use App\Flight;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VooController extends Controller
{
    public function index()
    {
        $voo = User::find(Auth::id())->flight;

        // dd($voo);

        return view('usuario.index')->with('voo', $voo);
    }

    public function reservar($id)
    {

        if(!User::find(Auth::id())->flight()->find($id)){

            User::find(Auth::id())->flight()->save(Flight::find($id));

            Session::flash('msg', [
                'mensagem' =>  'Erro: Voo reservado',
                'class' => 'green'
            ]);

            return redirect()->route('usuario.voos');
        }
        else {
            
            Session::flash('msg', [
                'mensagem' =>  'Erro: Voo ja reservado',
                'class' => 'red'
            ]);

            return redirect()->back();
        }


        // dd(User::find(Auth::id())->flight);

        
    }
}
