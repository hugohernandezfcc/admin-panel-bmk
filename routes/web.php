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

Route::get('/campos', 'PanelController@campos')->name('campos');

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
		/*
		$allTables = array("menus", "privacy_statement", "support_tickets", "professional_information", "users", "medicos");
		$allColumns = array();
		$i = 0;

        foreach ($allTables as $table)
        {
        	
            if(Schema::hasTable($table))
            {
                echo "Table: [ ".$table." ]"."<br>"."Columns:"."<br>";

                $columns = Schema::getColumnListing($table);

                foreach ($columns as $column)
                {
                	
                	if(Schema::hasColumn($table, $column))
                	{
                		//$type = Schema::getColumnType($table, $column);
                    	//echo "[ ".$column." ]"." - type [ ".$type." ]"."<br>";
                    	echo "Column: ".$column." in table : ".$table." exist !"."<br>";
                    	$allColumns[$i]['table'] = $table;
                    	$allColumns[$i]['field'] = $column;

                    	$i++;
                	}
                    
                    
                    echo "[ ".$column." ]"."<br>";
                }
                echo "<br>"."------------------------------------"."<br>";
            }
            else
                echo "Your table -> ".$table." not exist !"."<br>";
            
        }

        foreach ($allColumns as $columnN)
        {
        	echo $columnN['table'];
        }
        */
/*
        $query = 'select column_name, data_type from information_schema.columns where table_schema = \'public\' and table_name = \'menus\';';
        echo $query;
        $menus = DB::select($query);

        foreach ($menus as $menu)
        {
        	echo $menu->column_name;
        }
*/
        $allTables = array("menus", "privacy_statement", "support_tickets", "professional_information", "users", "medicos");
		$allColumns = array();
		$i = 0;

        foreach ($allTables as $table)
        {
        	$query = 'select column_name, data_type from information_schema.columns where table_schema = \'public\' and table_name = \''.$table.'\';';
            echo $query;
            $columnListing = DB::select($query);
            if(!empty($columnListing))
            {
            	foreach ($columnListing as $column)
                {
                		$allColumns[$i]['table'] = $table;
                    	$allColumns[$i]['field'] = $column->column_name;
                    	$allColumns[$i]['data_type'] = $column->data_type;
                    	$i++;
                }
                //echo "<br>"."------------------------------------"."<br>";
            }
            else
            	echo "Your table -> ".$table." not exist !"."<br>";
        }

        foreach ($allColumns as $columnN)
        {
        	echo "[ table: ".$columnN['table']." field: ".$columnN['field']." data type: ".$columnN['data_type']." ]"."<br>";
        }

});