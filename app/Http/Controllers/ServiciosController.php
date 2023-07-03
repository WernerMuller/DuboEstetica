<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\Especialidad;
use App\Models\Packs_destalle;
use App\Models\Packs_planes;



class ServiciosController extends Controller{
    
    public function servicios($id_servicio){

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];

        $selected = 2;

        $title              = strtoupper($this->datos_especialidad($id_servicio)["nombre"]);
        $descripcion        = $this->datos_especialidad($id_servicio)["descripcion"]; 
        $nota               = $this->datos_especialidad($id_servicio)["nota"];
        $sessiones          = $this->datos_especialidad($id_servicio)["sesiones"];    
        $detalle_session    = $this->datos_especialidad($id_servicio)["detalle_session"];    
        $tiempo             = $this->datos_especialidad($id_servicio)["tiempo"];    
        $tiempo             = $this->datos_especialidad($id_servicio)["tiempo"];    
        $precio             = $this->datos_especialidad($id_servicio)["precio"];    
        $menu               = strtoupper($this->datos_especialidad($id_servicio)["menu"]);    

        return view("servicios", compact("precio","tiempo","detalle_session" ,"sessiones","descripcion", "nota", "selected", 
                                        "title","phone", "direccion", "email_contact", "facebook", "twtter", "menu", "id_servicio"));
    }


    public function solicitar_pack($id_servicio){

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];

        $title              = strtoupper($this->datos_especialidad($id_servicio)["nombre"]);
        $descripcion        = $this->datos_especialidad($id_servicio)["descripcion"]; 
        $nota               = $this->datos_especialidad($id_servicio)["nota"];
        $sessiones          = $this->datos_especialidad($id_servicio)["sesiones"];    
        $detalle_session    = $this->datos_especialidad($id_servicio)["detalle_session"];    
        $tiempo             = $this->datos_especialidad($id_servicio)["tiempo"];    
        $tiempo             = $this->datos_especialidad($id_servicio)["tiempo"];    
        $precio             = $this->datos_especialidad($id_servicio)["precio"];    
        $menu               = strtoupper($this->datos_especialidad($id_servicio)["menu"]);  

        $selected = 2;

        return view("solicitar_pack", compact("precio","tiempo","detalle_session" ,"sessiones","descripcion", "nota", "selected", 
                                        "title","phone", "direccion", "email_contact", "facebook", "twtter", "menu", "id_servicio"));
    }



    function datos_especialidad($id){
        return Especialidad::select("e.nombre", "ed.menu", "e.precio","ed.sesiones","ed.detalle_session","ed.tiempo","ed.descripcion", "ed.nota")
                            ->where("e.id", $id)
                            ->join("especialidad_detalle AS ed", "e.id", "ed.id_especialidad")
                            ->get()[0];
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
