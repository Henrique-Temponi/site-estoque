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

        $turno = [
            1 => 'Manha',
            2 => 'Tarde',
            3 => 'Noite',
        ];


        return view('web.usuario.index')
            ->with('voo', $voo)
            ->with('turno', $turno);
    }

    public function reservar($id)
    {

        $flights = Flight::all();
        $voo = User::find(Auth::id())->flight();

        if($flights->count() > 0 && (!$voo->find($id))){

            $voo->save(Flight::find($id));

            Session::flash('msg', [
                'mensagem' =>  'Voo reservado com sucesso',
                'class' => 'green'
            ]);

            return redirect()->route('usuario.voos');
        }
        else {
            
            Session::flash('msg', [
                'mensagem' =>  'Erro: Voo ja reservado',
                'class' => 'red'
            ]);

            // return redirect()->route('site.home');
            return redirect()->back();
        }
    }

    public function deletar($id)
    {
        User::find(Auth::id())->flight()->detach($id);

        return redirect()->route('usuario.voos');
    }
}
