<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\NewNav;


class QuienessomosController extends Controller{

    public function quienessomos(){

        $selected = 4;

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $url_general = $this->get_url_general();


        $especialidad = $this->get_especialidades();

        return view('quienessomos',  compact("selected", "phone", "direccion", "email_contact", "facebook",
                                            "twtter", "instagram", "url_general", "especialidad"));

    }

    function get_especialidades()
    {
        return NewNav::where("estado", 1)->get();
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
