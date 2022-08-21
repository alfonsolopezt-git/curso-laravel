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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/escribeme', function () {
    echo 'contactame';
})->name('contacto');

Route::get('/custom',function(){
    $msj = 'Mensaje desde el servidor *-*';
    $data = ['msj' => $msj, 'edad' => 15];
    return view('custom',$data);
});
