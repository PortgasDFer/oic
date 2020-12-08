<?php

namespace LaGranLinea\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class FormularioContacto extends Mailable
{
    use Queueable, SerializesModels;

    
    public $asunto = "Nuevo usuario registrado al foro";
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.formulario-contacto');
    }
}
