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

Route::resource('student','StudentControler');
Route::get('/usuarios',function(){
    return 'Usuarios';
});
Route::get("/site","Youtube@index");
Route::get("/prueba","StudentControler@store");
