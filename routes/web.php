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
		/*
		//Checking for existence of columns
		if (Schema::hasColumn('menus', 'if'))
		{
		    //code
		}
		*/

		/*
		//Checking for existence of table
		if(Schema::hasTable('menus'))
		{
			$menus = DB::table('menus')->get();
			echo $menus.'<br><br>';
		}
		*/

		/*
		Schema::table('menus', function($table)
		{
			$table->getColumnListing();
		});
		*/

		/*
		$columns = DB::getSchemaBuilder()->getColumnListing('menus');
		echo $columns;
		*/

		$allTables = array("menus", "privacy_statement", "support_tickets", "professional_information", "users", "medicos");
		$allColumns = array();

        foreach ($allTables as $table)
        {
            if(Schema::hasTable($table))
            {
                echo "Table: [ ".$table." ]"."<br>"."Columns:"."<br>";

                $columns = Schema::getColumnListing($table);
                $counter = 0;
                foreach ($columns as $column)
                {
                	/*
                	if(Schema::hasColumn($table, $column))
                	{
                		//$type = Schema::getColumnType($table, $column);
                    	//echo "[ ".$column." ]"." - type [ ".$type." ]"."<br>";
                    	echo "Column: ".$column." in table : ".$table." exist !"."<br>";
                	}
                    */
                	$allColumns[$counter] = [
                		[
                			'table'=>$table,
                			'field'=>$column
                		]
                	];     	 
                    echo "[ ".$column." ]"."<br>";
                    $counter = $counter+1;
                }
                echo "<br>"."------------------------------------"."<br>";
            }
            else
                echo "Your table -> ".$table." not exist !"."<br>";
        }

        foreach ($allColumns as $column )
        {
        	echo $column['table']." Field: ".$column['field'];
        }

});