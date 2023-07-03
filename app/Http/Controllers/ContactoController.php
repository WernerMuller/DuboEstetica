<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Horario;
use App\Models\Configuracion;
use Carbon\Carbon;


class ContactoController extends Controller{
    
    public function contactanos(){

        $selected = 4;

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $url_general = $this->get_url_general();

        return view("contactanos", compact("selected", "phone", "direccion", "email_contact", "facebook", 
                                            "twtter", "instagram", "url_general"));
    }
    
    function get_url_general(){
        return Configuracion::select("resultado")->where("dato", "url-general")->get()[0]["resultado"];
    }

    function get_instagram(){
        return Configuracion::select("c.resultado")->where("c.dato","instagram")->get();
    }

    public function contactanos_send_email(Request $request){
        $data = $request->all();

        $nombre = strtolower($data["nombre"]);
        $email = strtolower($data["email"]);
        $subject = strtolower($data["subject"]);
        $msg = strtolower($data["msg"]);
        $email_contacto = $this->get_email_contact()[0]["resultado"];
        // return $email_contacto;
        $correo = new ContactanosMailable($nombre, $email, $subject, $msg);
        Mail::to($email_contacto)->send($correo); 
        return "ok";
    }

    function get_phone(){
        return Configuracion::select("c.resultado")->where("c.dato","telefono")->get();
    }

    function get_adrees(){
        return Configuracion::select("c.resultado")->where("c.dato","direccion")->get();
    }

    function get_email_contact(){
        return Configuracion::select("c.resultado")->where("c.dato","email-contacto")->get();
    }

    function get_facebook(){
        return Configuracion::select("c.resultado")->where("c.dato","facebook")->get();
    }

    function get_twtter(){
        return Configuracion::select("c.resultado")->where("c.dato","twtter")->get();
    }
}
