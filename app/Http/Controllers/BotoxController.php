<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\Especialidad;


class BotoxController extends Controller{

    public function toxina_butulinica(){
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(2);

        return view("botox", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }

    // *plamas rico en plaquetas
    function plasma_rico_plaquetas()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(10);

        return view("plasma", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }


    function rejuvenecimiento_facial()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(11);

        return view("rejuvenicimiento", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }


    function acido_hialuronicos()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(12);

        return view("acido-hialuronicos", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }


    function bioestimulacion()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(13);

        return view("bioestimulacion", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }

    // * Tratamientos corporales
    function tratamientos_corporales()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(14);

        return view("tratamientos-corporales", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }

    function hiperhidrosis()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(15);

        return view("hiperhidrosis", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }

    function limpieza_facial()
    {
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 2;

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(16);

        return view("limpieza_facial", compact("phone", "email_contact", "facebook",
                                    "twtter", "direccion", "selected",
                                    "instagram", "url_general", "especialidades"));
    }



    public function especialidad($id){
        return Especialidad::where("nav", $id)->get();
    }

    function get_url_general(){
        return Configuracion::select("resultado")->where("dato", "url-general")->get()[0]["resultado"];
    }

    function get_instagram(){
        return Configuracion::select("c.resultado")->where("c.dato","instagram")->get();
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
