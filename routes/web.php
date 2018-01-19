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

Route::get('/aviso-de-privacidad', 'PanelController@avisoPrivacidad')->name('avisoPrivacidad');

Route::get('/tickets-de-ayuda', 'PanelController@ticketsAyuda')->name('ticketsAyuda');

Route::get('/medicos', 'PanelController@medicos')->name('medicos');

Route::get('/prueba', 'PanelController@prueba')->name('prueba');

Route::get('/pruebaDB', function () {
	
	/* 
		//Retrieving All Rows From A Table
		$users = DB::table('users')->get();

		foreach ($users as $user) {
			echo $user->name;
		}

		//Retrieving A Single Row / Column From A Table
		$user = DB::table('users')->where('name', 'John')->first();
		
		echo $user->name;
		
		//Retrieving A List Of Column Values
		$titles = DB::table('roles')->pluck('title');

		foreach ($titles as $title) {
			echo $title;P
		}
		//Or, you may also specify a custom key column for the returned Collection:
		$roles = DB::table('roles')->pluck('title', 'name');

		foreach ($roles as $name => $title) {
		    echo $title;
		}
	*/
		$query = 'select table_schema,table_name, table_catalog from information_schema.tables WHERE table_catalog = \'d5dp3j0qgqlaai\' AND table_type = \'pgsql\' AND table_schema = \'public\' ORDER BY table_name;';
		
		echo $query;

		$tables = DB::select('SHOW TABLES');
		//$tables = DB::select('SHOW TABLES');
		echo $tables;
});