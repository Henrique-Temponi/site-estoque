<?php

namespace App\Http\Controllers\Admin;

use App\Compahia;
use App\Destino;
use App\Flight;
use App\Http\Controllers\Controller;
use App\Http\Requests\Voo as RequestVoo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    // public function login()
    // {
    //     // $this->authorize('admin-painel', Auth::user());
    //     return view('admin.login.index');
    // }

    // public function verificar (Request $request)
    // {   
    //     // $this->authorize('admin-painel', Auth::user());
    //     // dd($request);
    //     $credenciais = $request->only('email', 'password');
    //     // dd($credenciais);
        
    //     if (Auth::attempt($credenciais)) {
            
    //         $request->session()->flash('msg', [
    //             'mensagem' =>  'Login feito com sucesso',
    //             'class' => 'green'
    //         ]);

    //         return redirect()->route('admin.index');
    //     }

        
    //     $request->session()->flash('msg', [
    //         'mensagem' =>  'Erro: Confira os dados',
    //         'class' => 'red'
    //     ]);

    //     return redirect()->route('admin.login.index');
    // }

    // public function logout ()
    // {
    //     $this->authorize('admin-painel', Auth::user());
    //     Auth::logout();
        
    //     return redirect()->route('site.home');
    // }

    public function index()
    {


        $this->authorize('admin-painel', Auth::user());

        // $response = Gate::inspect('admin-painel', Auth::user());

        // if ($response->allowed()) {

            $todoOsDestinos = Destino::all();
            $voos_quantidades = Flight::all()->count();
            $user_quantidades = User::all()->count();
            $destino_quantidades = $todoOsDestinos->count();
            $compahia_quantidades = Compahia::all()->count();

            $dados = [
                'voo' => $voos_quantidades,
                'user' => $user_quantidades,
                'destino' => $destino_quantidades,
                'compahia' => $compahia_quantidades,
            ];

            //TODO: tentar fazer apenas uma arranjo de json, ao inves de mandar tudo separado
            // depois tentar fazer por conjunto associativo
            // foreach ($todoOsDestinos as $destino) {
            //     $quantidadeReservas[$destino->nome] = $destino->flight->count();
            // }

            foreach ($todoOsDestinos as $destino) {
                $quantidadeReservasNome[] = $destino->nome;
                $quantidadeReservas[] = $destino->flight->count();
            }

            // dd($quantidadeReservas);

            $novosUsuarios = DB::table('user_amount_month')->select('*')->first();

            // dd($novosUsuarios);
    
            return view('admin.home')
                ->with('dados', $dados)
                ->with('novosUsuarios', $novosUsuarios)
                ->with('quantidadeReservasNome', $quantidadeReservasNome)
                ->with('quantidadeReservas', $quantidadeReservas);
        // }  
        // else {

            // Session::flash('msg', [
            //     'mensagem' => $response->message(),
            //     'class' => 'blue'
            // ]);

            // return redirect()->route('site.home');
        // }
    }

    public function listar()
    {
        $this->authorize('admin-painel', Auth::user());
        $destinos = Destino::all();
        $voos = Flight::all();

        // dd($voos[0]->user()->count());

        return view('admin.voo.listar')
            ->with('destinos', $destinos)
            ->with('voos', $voos);
    }

    public function pesquisar(Request $request)
    {
        $this->authorize('admin-painel', Auth::user());
        $destinos = Destino::all();
        $dado = $request->destino;
        
        ($dado != 0) ? $voos = Flight::where('destino_id', $dado)->get() : $voos = Flight::all();

        //TODO: colocar avisa de nada encontrado
            

        // dd($voos);
        // dd($voos[0]->user()->count());

        return view('admin.voo.listar')
            ->with('destinos', $destinos)
            ->with('voos', $voos);
    }
    
    public function adicionar()
    {
        $this->authorize('admin-painel', Auth::user());
        $compahia = Compahia::all();
        $destino = Destino::all();

        return view('admin.voo.adicionar')
            ->with('compahia', $compahia)
            ->with('destino', $destino);
    }

    public function atualizar(RequestVoo $request)
    {
        $this->authorize('admin-painel', Auth::user());
        // dd($request);

        // $flight = Flight::create($request->all());

        $flight = new Flight();
        $flight->voo = $request->input('voo');
        $flight->turno = $request->input('turno');

        // dd($flight);
        if (Destino::find($request->input("destino_id")) == null) return redirect()->back();
        if (Compahia::find($request->input("compahia_id")) == null ) return redirect()->back();

        $flight->destino_id = $request->input("destino_id");
        $flight->compahia_id = $request->input("compahia_id");

        // dd($flight);

        $flight->save();

        $request->session()->flash('msg', [
            'mensagem' => 'Voo Adicionado com sucesso',
            'class' => 'green'
        ]);
        

        return redirect()->route('admin.voos.listar');
    }
    
    public function editar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        $voo = Flight::find($id);

        if($voo == null) return redirect()->route('admin.voos.listar');

        $destino = Destino::all();
        $compahia = Compahia::all();

        return view('admin.voo.editar')->with('voo', $voo)
            ->with('compahia', $compahia)
            ->with('destino', $destino);
    }

    public function salvar(RequestVoo $request, $id)
    {
        $this->authorize('admin-painel', Auth::user());
        Flight::find($id)->update($request->all());

        $request->session()->flash('msg', [
            'mensagem' => 'Voo editado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.voos.listar');
    }

    public function deletar($id)
    {
        $this->authorize('admin-painel', Auth::user());
        Flight::find($id)->delete();

        Session::flash('msg', [
            'mensagem' => 'Voo deletado com sucesso',
            'class' => 'green'
        ]);

        return redirect()->route('admin.voos.listar');
    }
}
