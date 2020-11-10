<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailMatricula extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud de Matrícula";
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
        return $this
            ->from('jose@laacademiasc.es', "Solicitud de " .$this->mensaje->name)
            ->view('mails.matriculacionMail');
    }
}
