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

Route::get('/menus', 'PanelController@menus')->name('menus');
//Route::get('menus',['as'=>'factura','uses'=>'HomeController@menus']);

Route::get('/prueba', 'PanelController@prueba')->name('prueba');

Route::get('/pruebaDB', function () { 
   $menus = DB::table('menus')->get();
   echo $menus;
});