<?php

namespace App\Http\Controllers;

use App\Mail\MailMatricula;
use App\Mail\MensajeEnviado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MatriculationController extends Controller
{
    //
    public function index()
    {
        return view('matricula');
    }

    public function send()
    {

        //Aqui incluiremos un mensaje de sesion
        $msgs = (object) request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subname' => 'required',
            'mensaje' => 'nullable',
            'horas3' => 'required_without_all:horas2',
            'horas2' => 'required_without_all:horas3'
        ]);

        //Enviamos el email

        Mail::to('jose@laacademiasc.es')->queue(new MailMatricula($msgs));

        return back()->with('emailConfirmado', 'Email enviado');
    }
}
