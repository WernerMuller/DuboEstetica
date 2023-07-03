<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\Especialidad;


class HifuController extends Controller{
    public function hifu(){
        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $url_general = $this->get_url_general();

        $especialidades = $this->especialidad(1);

        $selected = 2;
        return view("hifu", compact("phone", "email_contact", "facebook", "twtter", 
                                    "direccion", "selected", "instagram", "url_general", 
                                    "especialidades"));
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

