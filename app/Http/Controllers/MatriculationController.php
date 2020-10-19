<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculationController extends Controller
{
    //
    public function index()
    {
        return view('matricula');
    }

    public function send(Request $request)
    {
        return 'Formulario enviado a ' . $request->nombre;
    }
}
