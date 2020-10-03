<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Essa classe nao tem nenhuma funcao ao site principal, ela eh para testes de formatacao e outras coisas
 */
class TestController extends Controller
{
    public function test()
    {
        $test = Carbon::now();
        echo $test;
        echo "<br>";
        echo $test->year;
        echo "<br>";
        echo $test->month;
        echo "<br>";
        echo $test->shortEnglishMonth;
        
        return view('test');
    }
}
