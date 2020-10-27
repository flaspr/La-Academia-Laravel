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
        return view('matricula2');
    }

    public function send()
    {

        //Aqui incluiremos un mensaje de sesion
        $msgs = (object) request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subname' => 'required',
            'mensaje' => 'nullable',
        ]);

        //Enviamos el email

        Mail::to('dosekcoc@gmail.com')->send(new MailMatricula($msgs));

        return back()->with('matriculaConfirmado', 'MatriculaConfirmado prueba');
    }
}
