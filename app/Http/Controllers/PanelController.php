<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\menu;
use App\privacy_statement;
use App\SupportTycket;
use App\professional_information;
use DB;
use Illuminate\Support\Facades\Schema;

class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function prueba()
    {
        return view('home', ['variable1'=>'Gervacio']);
    }

    public function menus()
    {
        $menus = DB::table('menus')->get();
        return view('menus', ['menus'=>$menus]);
    }

    public function avisoPrivacidad()
    {
        $statements = DB::table('privacy_statement')->get();
        return view('avisoPrivacidad', ['statements'=>$statements]);
    }

    public function ticketsAyuda()
    {
        $tickets = DB::table('support_tickets')->get();
        return view('ticketsAyuda', ['tickets'=>$tickets]);
    }

    public function medicos()
    {
        $medicos = DB::table('professional_information')->get();
        return view('medicos', ['medicos'=>$medicos]);
    }

    public function campos()
    {      
        $query = 'select table_name from information_schema.tables where table_schema = \'public\' order by table_name;';
        $allTables = DB::select($query);
        $allColumns = array();
        $i = 0;

        foreach ($allTables as $table)
        {
            $query = 'select column_name, data_type from information_schema.columns where table_schema = \'public\' and table_name = \''.$table->table_name.'\'order by column_name;';
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
            }
        }
        return view('campos', ['tablas'=>$allTables, 'campos'=>$allColumns]);
    }
}
