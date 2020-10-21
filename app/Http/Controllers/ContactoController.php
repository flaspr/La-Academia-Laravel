<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function send()
    {

        //Aqui incluiremos un mensaje de sesion
        $msgs = request() -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'subname' => 'required'
        ]);


        return back()->with('matriculaConfirmado','MatriculaConfirmado prueba');
    }
}
