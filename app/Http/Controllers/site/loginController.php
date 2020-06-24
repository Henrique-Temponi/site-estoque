<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function verificar (Request $request)
    {   
        // dd($request);
        $credenciais = $request->only('name', 'password');
        
        if (Auth::attempt($credenciais)) {
            return redirect()->route('site.home');
        }

        return redirect()->route('site.login');
    }

    public function logout ()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
