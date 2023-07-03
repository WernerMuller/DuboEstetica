<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewslatterMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "New Newslatter";

    public $nombre;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $nombre = $this->nombre;
        $email = $this->email;

        return $this->view('emails.newslatter', compact('nombre', 'email'));
        // return $this->view('emails.demo');
    }
}
