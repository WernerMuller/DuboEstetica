<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\Packs;
use App\Models\Packs_destalle;
use App\Models\Packs_planes;
use App\Models\Especialidad;
  

class PacksController extends Controller{
    
    public function packs($titulo_pack){

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];


        $title = $titulo_pack == 'PackMujer' ? "Pack`s Mujer" : 'Pack`s Hombre';

        $genero = $titulo_pack == 'PackMujer' ? 0 : 1;

        $selected = 2;


        $packs            = $this->datos_especialidad($genero);

        $url_general = $this->get_url_general();

        return view("packs", compact("title","selected", "phone", "direccion", "email_contact", 
                                    "facebook", "twtter", "packs", "instagram", "url_general"));
    }

    function get_url_general(){
        return Configuracion::select("resultado")->where("dato", "url-general")->get()[0]["resultado"];
    }

    function get_instagram(){
        return Configuracion::select("c.resultado")->where("c.dato","instagram")->get();
    }

    function datos_especialidad($genero){
        return Especialidad::select("e.id","e.nombre", "ed.menu", "e.precio","ed.sesiones","ed.detalle_session","ed.tiempo",
                                    "ed.descripcion", "ed.nota", "ed.menu")
                            ->where("e.tipo", 2)
                            ->where("e.genero", $genero)
                            ->join("especialidad_detalle AS ed", "e.id", "ed.id_especialidad")
                            ->get();
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
