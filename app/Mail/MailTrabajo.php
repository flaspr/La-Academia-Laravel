<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailTrabajo extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "solicitud de trabajo";
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msgs)
    {
        //

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
            ->view('mails.trabajoMail')
            ->attach(
                $this->mensaje->attached->getRealPath(),
                [
                    'as' => $this->mensaje->attached->getClientOriginalName(),
                    'mime' => $this->mensaje->attached->getClientMimeType(),
                ]
            );
    }
}
