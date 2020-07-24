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

Route::get('/admin/login', [
    'as' => 'admin.login',
    'uses' => 'Admin\AdminController@login'
]);

Route::post('/admin/login', [
    'as' => 'admin.login',
    'uses' => 'Admin\AdminController@verificar'
]);

Route::group(['middleware' => ['auth']], 
    function() {

        Route::get('/logout', [
            'as' => 'site.logout',
            'uses' => 'site\LoginController@logout'
        ]);

        Route::get('/usuario/reservar/{id}', [
            'as' => 'usuario.reservar',
            'uses' => 'Usuario\VooController@reservar'
        ]);

        Route::get('/usuario/voos', [
            'as' => 'usuario.voos',
            'uses' => 'Usuario\VooController@index'
        ]);

        Route::get('/admin', [
            'as' => 'admin.index',
            'uses' => 'Admin\AdminController@index'
        ]);

        Route::get('/admin/voos/listar', [
            'as' => 'admin.voos.listar',
            'uses' => 'Admin\AdminController@listar'
        ]);

        Route::get('/admin/voos/adicionar', [
            'as' => 'admin.voos.adicionar',
            'uses' => 'Admin\AdminController@adicionar'
        ]);

        Route::post('/admin/voos/adicionar', [
            'as' => 'admin.voos.adicionar',
            'uses' => 'Admin\AdminController@atualizar'
        ]);

        Route::get('/admin/voos/editar/{id}', [
            'as' => 'admin.voos.editar',
            'uses' => 'Admin\AdminController@editar'
        ]);

        Route::post('/admin/voos/editar/{id}', [
            'as' => 'admin.voos.editar',
            'uses' => 'Admin\AdminController@salvar'
        ]);

        Route::get('/admin/voos/deletar/{id}', [
            'as' => 'admin.voos.deletar',
            'uses' => 'Admin\AdminController@deletar'
        ]);


        Route::get('/admin/usuarios/listar', [
            'as' => 'admin.usuarios.listar',
            'uses' => 'Admin\UserController@listar'
        ]);

        Route::get('/admin/usuarios/deletar/{id}', [
            'as' => 'admin.usuarios.deletar',
            'uses' => 'Admin\UserController@deletar'
        ]);
    }
);
