<?php

namespace App\Http\Controllers;

use App\Mail\MailTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrabajoController extends Controller
{
    //Creación del controlador
    public function index()
    {
        return view('trabajo');
    }

    public function send()
    {
        $msgs = (object) request()->validate([
            'name' => 'required',
            'subname' => 'required',
            'email' => 'required|email',
            'attached' => 'required|mimes:pdf'
        ]);

        Mail::to('miadmeyfourproyecto@gmail.com')->send(new MailTrabajo($msgs));
        return back()->with('matriculaConfirmado', 'MatriculaConfirmado prueba');
    }
}
