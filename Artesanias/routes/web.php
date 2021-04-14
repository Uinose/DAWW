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

Route::get('/', function () {return view('index');});
Route::get('/producto/{id}/{nombre}', function ($id,$nombre) {
    return view('verproducto')->with('id',$id)->with('nombre',$nombre);
});
Route::get('/contacto', 
    function () {
        $contacto='Quieres';
        $valores=5;
        $color='#aaa';
        return view('contacto')
                ->with('nombre', $contacto)
                ->with('valores', $valores)
                ->with('fondo', $color);
});