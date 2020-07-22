<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as' => 'site.home',
    'uses' => 'site\HomeController@index'
]);

Route::get('/login', [
    'as' => 'site.login',
    'uses' => 'site\LoginController@login'
]);

Route::post('/login', [
    'as' => 'site.login',
    'uses' => 'site\LoginController@verificar'
]);

Route::get('/registrar', [
    'as' => 'site.registrar',
    'uses' => 'site\LoginController@registrar'
]);

Route::post('/registrar', [
    'as' => 'site.registrar',
    'uses' => 'site\LoginController@create'
]);

Route::group(['middleware' => ['auth']], 
    function() {

        Route::get('/listar', [
            'as' => 'site.listar',
            'uses' => 'site\RegistroController@index'
        ]);
        
        Route::get('/novo', [
            'as' => 'site.novo',
            function ()
            {
                return view('site.novo');
            }
        ]);

        Route::post('/novo', [
            'as' => 'site.novo',
            'uses' => 'site\RegistroController@create'
        ]);

        Route::get('/editar/{id}', [
            'as' => 'site.editar',
            'uses' => 'site\RegistroController@editar'
        ]);

        Route::post('/editar/{id}', [
            'as' => 'site.editar',
            'uses' => 'site\RegistroController@atualizar'
        ]);

        Route::get('/deletar/{id}', [
            'as' => 'site.deletar',
            'uses' => 'site\RegistroController@deletar'
        ]);

        Route::get('/logout', [
            'as' => 'site.logout',
            'uses' => 'site\LoginController@logout'
        ]);

        Route::get('/listar/pesquisar', [
            'as' => 'site.listar.pesquisar',
            'uses' => 'site\RegistroController@pesquisar'
        ]);

        Route::get('/usuario/reservar/{id}', [
            'as' => 'usuario.reservar',
            'uses' => 'Usuario\VooController@reservar'
        ]);

        Route::get('/usuario/voos', [
            'as' => 'usuario.voos',
            'uses' => 'Usuario\VooController@index'
        ]);
    }
);
