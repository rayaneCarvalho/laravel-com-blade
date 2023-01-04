<?php

use App\Http\Controllers\ProfileController;
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

Route::get('blade', function () {
$meusDados = [
    'nome' => 'Rayane Carvalho',
    'email' => 'carvalhorayane779@gmail.com'
];

    $registros = 2;

    return view('child',
    [
        'nome' => 'Icaro Jobs',
        'meusDados' => $meusDados,
        'resgistros' => $registros,
    ]

    );



    return view('layouts\child', ['nome' => 'Rayane Carvalho', 'meusDados' => $meusDados] );
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

