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
    function () {
        return view ('home');
    }
]);

Route::get('/login', [
    'as' => 'site.login',
    function() {
        return view ('site.login');
    }
]);

Route::post('/login', [
    'as' => 'site.login',
    'uses' => 'site\loginController@verificar'
]);

Route::group(['middleware' => ['auth']], 
    function() {

        Route::get('/listar', [
            'as' => 'site.listar',
            function ()
            {
                return view('site.listar');
            }
        ]);
        
        Route::get('/novo', [
            'as' => 'site.novo',
            function ()
            {
                return view('site.novo');
            }
        ]);

        Route::get('/logout', [
            'as' => 'site.logout',
            'uses' => 'site\loginController@logout'
        ]);
    }
);
