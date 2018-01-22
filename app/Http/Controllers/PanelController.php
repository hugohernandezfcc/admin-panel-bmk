<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\menu;
use App\privacy_statement;
use App\SupportTycket;
use App\professional_information;
use DB;

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
        $allTables = array("menus", "privacy_statement", "support_tickets", "professional_information", "users", "medicos");

        foreach ($allTables as $table)
        {
            if(Schema::hasTable($table))
            {
                echo "Yes, table : ".$table." exist !"."<br>";

                $columns = Schema::getColumnListing($table);
                foreach ($columns as $column)
                {
                    $type = Schema::getColumnType($table, $column);
                    echo $type." ]"."<br>";
                }
                 echo "<br>"."-----------------------"."<br>";
            }
            else
                echo "Your table -> ".$table." not exist !"."<br>";
        }
    }
}
