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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prueba', 'HomeController@antonioPrueba')->name('antonioPrueba');

Route::get('/menus', 'HomeController@menus')->name('menus');

Route::get('/pruebas', function () { 
   $menus = DB::table('menus')->get();
   echo $menus;
});

//Route::get('menus',['as'=>'factura','uses'=>'HomeController@menus']);
