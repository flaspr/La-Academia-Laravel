<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Mensaje de Contacto";
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msgs)
    {
        $this->mensaje = $msgs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contactoMail');
    }
}
