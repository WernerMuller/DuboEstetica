<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad; 
use App\Models\Horariofuncionamiento;
use App\Models\Reservas;
use App\Models\Horario;
use App\Models\Packs;
use App\Models\Configuracion;
use App\Models\Horario_micropigmentacion_cejas;
use App\Models\Horario_micropigmentacion_delineado_de_ojos;
use App\Models\Horario_micropigmentacion_labios;
use App\Models\Horario_micropigmentacion_lacer_mini;
use App\Models\Horario_micropigmentacion_lacer_pequeno;
use App\Models\Horario_micropigmentacion_lacer_mediano;
use App\Models\Horario_micropigmentacion_lacer_grande;
use App\Models\Horario_hifu_facial;
use App\Models\Horario_hifu_corporal;
use App\Models\Horario_hifu_reducir_y_afirmar;
use App\Models\Horario_botox_hialuronico;
use App\Models\Horario_trabajo;
use Carbon\Carbon;

class IndexController extends Controller{ 
    public $apertura;
    public $termino;
    public $n_atencion;


    function index(){

        $especialidad = $this->especialidad();

        $apertura =  date("H:i", strtotime($this->horario_funcionamiento()[0]["apertura"]));
        $cierre = date("H:i", strtotime($this->horario_funcionamiento()[0]["cierre"]));


        $sab_apertura =  date("H:i", strtotime($this->horario_sabado()[0]["apertura"]));
        $sab_cierre = date("H:i", strtotime($this->horario_sabado()[0]["cierre"]));

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];
        $instagram = $this->get_instagram()[0]["resultado"];

        $selected = 1;

        $packs = $this->get_packs();

        $n_atencion = $this->n_atencion;

        $url_general = $this->get_url_general();

        return view("index",compact("especialidad", "apertura", "cierre", "selected", 
                                    "sab_apertura", "sab_cierre", "phone", "direccion", 
                                    "email_contact", "facebook", "twtter", "packs", 
                                    "n_atencion", "url_general", "instagram"));
    }

    function get_url_general(){
        return Configuracion::select("resultado")->where("dato", "url-general")->get()[0]["resultado"];
    }

    function get_atencion(){
        return Configuracion::select("resultado")->where("dato", "atencion")->get()[0]["resultado"];
    }

    function get_packs(){
        return Packs::select("p.id", "p.detalle", "pd.title", "pd.img","pd.texto", "pd.texto_2", "e.url")
                    ->join("packs_detalle AS pd", "p.id", "pd.id_pack")
                    ->join("especialidad AS e", "pd.id_producto", "e.id")
                    ->where("p.estado", 1)
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

    function get_instagram(){
        return Configuracion::select("c.resultado")->where("c.dato","instagram")->get();
    }

    function especialidad(){
        return Especialidad::select("id", "nombre", "tiempo")->get(); 
    }

    public function fechas_inhabiles(){

        $json = file_get_contents('https://api.roison.cl/feriados.json');
        $obj = json_decode($json, TRUE);
        return $obj;
    } 

    function horario_funcionamiento(){
        return Horariofuncionamiento::select("id", "apertura", "cierre")->where("id", 1)->get();
    }

    function horario_sabado(){
        return Horariofuncionamiento::select("id", "apertura", "cierre")->where("id", 2)->get();
    }

    public function data_especialista(){
        return "pipo desde el backend alravel";
    }

    public function horario_trabajo(){
        // return Horario
    }

    function get_horario_espacialidad(request $request){
        $data = $request->all();
        $id_especilidad = $data['id_especilidad'];

        $fecha_seleccionada = $data["fecha"];

        $limite = 2;

        $fechas = Horario::select("fecha_reserva AS fecha")->where("cupos", ">=", 1)->distinct("fecha_reserva")->get();

        return $fechas;

        $tiempo = array();
      
    }

    public function data_fecha_especialista(request $request){
      
        $data = $request->all();
        $fecha = $data['fecha'];
        $id_especilidad = $data['id_especilidad'];

        $date = Carbon::createFromFormat('d/m/Y', $fecha)->format('Y-m-d');

        $fechas_final = array();

        $unidades = Especialidad::select("unidades")->where("id", $id_especilidad)->first()["unidades"];

        $horario = Horario::select("id","hora_reserva",'fecha_reserva', "cupos")->where("fecha_reserva", $date)->get();

        $final_demo = array();


        for ($i=0; $i < count($horario) ; $i++) { 
            
            
            for ($i=0; $i < count($horario) ; $i++) { 
                $demo_array = array();
                $a = $i;
                for ($x=$i; $x < ($unidades + $i > count($horario) ? count($horario) : $unidades + $i ) ; $x++) { 
                    array_push($fechas_final,array("hora_reserva" => $horario[$x]["hora_reserva"], "cupos" => $horario[$x]["cupos"]));

                    if( $horario[$x]["cupos"] != 0 ){
                        array_push($demo_array,array("hora_reserva" => $horario[$x]["hora_reserva"], "cupos" => $horario[$x]["cupos"]));
                    }
                }
               
                array_push($final_demo,$demo_array);
            }
            
        }

       
        $demodemo = array();
        for ($i=0; $i < count($final_demo) ; $i++) { 
            if(count($final_demo[$i]) == $unidades){
                array_push($demodemo,array("hora_reserva" => $final_demo[$i][0]["hora_reserva"], "cupos" => $final_demo[$i][0]["cupos"]));
            }
        }

        return  $demodemo;


    }

    public function demodemo(){

        // $fecha = "18/02/2022";
        // $id_especilidad = 1;

        // $date = Carbon::createFromFormat('d/m/Y', $fecha)->format('Y-m-d');

        // $fechas_final = array();

        // $unidades = Especialidad::select("unidades")->where("id", $id_especilidad)->first()["unidades"];

        // $horario = Horario::select("id","hora_reserva",'fecha_reserva', "cupos")->where("fecha_reserva", $date)->get();

        // $final_demo = array();

        // for ($i=0; $i < count($horario) ; $i++) { 
            
        //     for ($i=0; $i < count($horario) ; $i++) { 
        //         $demo_array = array();
        //         $a = $i;
        //         for ($x=$i; $x < ($unidades + $i > count($horario) ? count($horario) : $unidades + $i ) ; $x++) { 
        //             array_push($fechas_final,array("hora_reserva" => $horario[$x]["hora_reserva"], "cupos" => $horario[$x]["cupos"]));

        //             if( $horario[$x]["cupos"] != 0 ){
        //                 array_push($demo_array,array("hora_reserva" => $horario[$x]["hora_reserva"], "cupos" => $horario[$x]["cupos"]));
        //             }
        //         }
               
        //         array_push($final_demo,$demo_array);
        //     }
            
        // }

       
        // $demodemo = array();
        // for ($i=0; $i < count($final_demo) ; $i++) { 
        //     if(count($final_demo[$i]) == $unidades){
        //         array_push($demodemo,array("hora_reserva" => $final_demo[$i][0]["hora_reserva"], "cupos" => $final_demo[$i][0]["cupos"]));
        //     }
        // }

        // return  $demodemo;
    }
   
    // function elementosUnicos($array){
    //     $arraySinDuplicados = [];
    //     foreach($array as $indice => $elemento) {
    //         if (!in_array($elemento, $arraySinDuplicados)) {
    //             $arraySinDuplicados[$indice] = $elemento;
    //         }
    //     }
    //     return $arraySinDuplicados;
    // }


    public function get_precio_especialidad(Request $request){
        $data = $request->all();
        $data_id = $data["id_especialidad"];
        // if($data == "")
        return format_money(Especialidad::select("precio")->where("id", $data_id)->first()["precio"]);
    }
    

}
