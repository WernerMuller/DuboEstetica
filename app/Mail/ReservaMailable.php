<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Configuracion;
use App\Models\Reservas;


class ReservaMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Comprobante de reseva";
    public $id_tbk;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id_tbk){
        $this->id_tbk = $id_tbk;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    function get_phone(){
        return Configuracion::select("c.resultado")->where("c.dato","telefono")->get();
    }

    function get_adrees(){
        return Configuracion::select("c.resultado")->where("c.dato","direccion")->get();
    }

    function get_email_contact(){
        return Configuracion::select("c.resultado")->where("c.dato","email-contacto")->get();
    }

    function quienes_somos(){
        return Configuracion::select("c.resultado")->where("c.dato","quienes_somos")->get();
    }

    function get_facebook(){
        return Configuracion::select("c.resultado")->where("c.dato","facebook")->get();
    }

    function get_instagram(){
        return Configuracion::select("c.resultado")->where("c.dato","instagram")->get();
    }

    public function build(){
        $fecha = date("Y");

        $datos = Reservas::select("reservas.nombre", "reservas.correo","reservas.rut", "reservas.fecha AS f_reserva", "reservas.hora AS h_reserva", "t.total", "t.fecha", 
                                    "e.nombre AS especialidad", "ptc.nombre AS fp", "t.card_detail", "t.payment_type_code AS type_code",
                                    "t.installments_number AS cts_ctas", "t.installments_amount AS val_ctas", "t.fecha")
                ->join("transbank AS t", "reservas.id_tbk", "t.id")
                ->join("especialidad AS e", "reservas.id_especialidad", "e.id")   
                ->join("payment_type_code AS ptc", "t.payment_type_code", "ptc.tipe")   
                ->where("reservas.id_tbk", $this->id_tbk)->get();

        $nombre = ucwords($datos[0]["nombre"]);
        $rut = $datos[0]["rut"];
        $email = $datos[0]["correo"];

        $telefono = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $quienes_somos = $this->quienes_somos()[0]["resultado"];
        $id = $this->id_tbk;

        $fecha_reserva = date("d/m/Y", strtotime($datos[0]["f_reserva"]));
        $hora_reserva =  substr($datos[0]["h_reserva"], 0, -3);

        $total =  $datos[0]["total"];

        $tbk_fecha = date("d/m/Y", strtotime($datos[0]["fecha"]));
        $tbk_hora = date("H:i", strtotime($datos[0]["fecha"]));

        $especialidad = $datos[0]["especialidad"];
        $ptc = $datos[0]["fp"];

        $card_detail = $datos[0]["card_detail"];

        $if_type_code = $datos[0]["type_code"];

        $cts_ctas = $datos[0]["cts_ctas"];

        $val_ctas = $datos[0]["val_ctas"];

        $facebook = $this->get_facebook()[0]["resultado"];

        $instagram = $this->get_instagram()[0]["resultado"];

        return $this->view('emails.comprobante_pago_reserva', compact("facebook","instagram","val_ctas","cts_ctas","if_type_code",
                                                                        "card_detail","ptc","especialidad",
                                                                        "tbk_hora","tbk_fecha","total", 
                                                                        "hora_reserva","fecha_reserva",
                                                                        "id","email","rut","nombre","fecha", "telefono", "direccion", "quienes_somos"));
    }
}
