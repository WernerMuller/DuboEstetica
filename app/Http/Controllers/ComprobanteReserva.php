<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ReservaMailable;
use Illuminate\Support\Facades\Mail;


class ComprobanteReserva extends Controller{

    public function envio_comprobante_reserva(){
        $correo = new ReservaMailable(178);

        Mail::to("luis.olave.carvajal@gmail.com")->send($correo);

        return "Mensaje enviado desde laravel";

    }

}
