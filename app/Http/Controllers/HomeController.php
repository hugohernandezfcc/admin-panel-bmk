<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function inicio()
    {
        return view('home', ['lastName'=>'Gervacio Téllez']);
    }

    public function menus()
    {
        $notes = [
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
        $ = array();
        return view('menus', ['notes'=>'$notes']);
    }
}
