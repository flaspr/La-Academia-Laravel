<?php

namespace App\Http\Controllers;

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
        $msgs = request() -> validate([
            'nameM' => 'required',
            'emailM' => 'required|email',
            'subnameM' => 'required',
            'mensajeM' => 'nullable'
        ]);

        //Enviamos el email

        Mail::to('dosekcoc@gmail.com')-> queue(new MensajeEnviado($msgs));

        return back()->with('matriculaConfirmado','MatriculaConfirmado prueba');
    }
}
