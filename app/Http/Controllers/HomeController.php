<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class HomeController extends Controller
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

    public function antonioPrueba()
    {
        return view('home', ['variable1'=>'Gervacio']);
    }

    public function menus()
    {
        
        $table_menus = [
            [
                'title' => 'Rutas Laravel',
                'body' => 'Las rutas se definen en el archivo routes/web.php',
                'important' => true
            ],
            [
                'title' => 'Blade',
                'body' => 'Blade es el motor de plantillas de Laravel',
                'important' => false 
            ]
        ];
        

        //$table_menus = DB::table('menus')->get();

        return view('menus', ['table_menus'=>$table_menus]);
    }
}
