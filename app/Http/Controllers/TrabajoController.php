<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    //Creación del controlador 
    public function index()
    {
        return view('trabajo');

    }
}
