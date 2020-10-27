<?php

namespace App\Http\Controllers;

use App\Mail\MailContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
    //
    public function index()
    {
        return view('contacto');
    }

    public function send()
    {

        //Aqui incluiremos un mensaje de sesion
        $msgs = (object) request()->validate([
            'nameC' => 'required',
            'emailC' => 'required|email',
            'subnameC' => 'required',
            'mensajeC' => 'required'
        ]);

        //Enviamos el email

        Mail::to('miadmeyfourproyecto@gmail.com')->send(new MailContacto($msgs));

        return back()->with('matriculaConfirmado', 'MatriculaConfirmado prueba'); //aqui que tengo que poner?
    }
}
