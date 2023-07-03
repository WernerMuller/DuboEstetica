<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Configuracion;

class ContactanosMailable extends Mailable{
    use Queueable, SerializesModels;

    public $subject = "Correo de contacto";

    // public $email_subject = null;

    public $nombre = null;
    public $email = null;
    public $asunto = null;
    public $msg = null;
    public $fecha;
    public $direccion;
    public $email_contacto;
    public $tel_contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $asunto, $msg){
    // public function __construct(){
        // $this->email_subject = "Email de contacto";

        $this->nombre = $nombre;
        $this->email = $email;
        $this->asunto = $asunto;
        $this->msg = $msg;
        $this->fecha = date("d/m/Y");
        
        $this->direccion = "";
        $this->email_contacto = "";
        $this->tel_contacto = "";
        
    }

    /**
     * Build the message. 
     *
     * @return $this
     */
    public function build(){

        $nombre = $this->nombre;
        $email = $this->email;
        $asunto = $this->asunto;
        $msg = $this->msg;
        $fecha = $this->fecha;
        $direccion = $this->direccion;

        return $this->view('emails.contactanos', compact('nombre', 'email', 'asunto', 'msg', 'fecha', 'direccion'));
    }
}
