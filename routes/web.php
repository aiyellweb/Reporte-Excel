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

	 $animales=   \App\animal::all();
    return view('welcome',compact('animales'));
});


Route::get('descargar/{id}','reporteController@animal')->name('descargar');