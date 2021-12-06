<?php

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
    return "<h1>Hola mundo con Laravel</h1>";
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function($nombre=null){
    $text = "<h2> Texto desde una ruta</h2>";
    $text .= "Nombre: ".$nombre;
    return view('pruebas', array(
        'text' => $text
    ));
});
