<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Compras;
use App\Models\Configuracion;
use App\Models\Transbank;
use App\Models\Reservas;
use App\Models\Clientes;

use App\Models\Payment_type_code;
use App\Models\Especialidad; 
use App\Models\Horario; 
use App\Mail\ReservaMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;



class TransbnankController extends Controller{

    public function __construct(){
        

        if(app()->environment("production")){
            WebpayPlus::configureForProduction(
                env("webpay_plus_cc"),
                env("webpay_plus_api_key")
            );
        }else{
            WebpayPlus::configureForTesting();
        }

    }

    public function iniciar_compra(Request $request){
        $post = $request->all();

        $tbk = new Transbank();

        $tbk->session_id = uniqid();
        $tbk->token = 0;
        $tbk->card_detail = 0;
        $tbk->installments_amount = 0;
        $tbk->payment_type_code = "no";
        $tbk->installments_number = 0;
        $tbk->email = $post["email"];
        $tbk->total = Especialidad::select("precio")->where("id", $post['id_reserva'])->first()["precio"];

        $tbk->save();


        $unidades = Especialidad::select("unidades")->where("id", $post['id_reserva'])->first()["unidades"];

        $str_unidades = "+".($unidades * 15)."minutes";

        $date_mod = strtotime(str_replace("/","-", $request["fecha_reserva"])); 
        $newDate = date("Y-m-d", $date_mod );

        $date_mod2 = strtotime($request["hora_reserva"].":00"); 
        $newDate2 = date("H:i:s", $date_mod2);


        $reserva = new Reservas(); 
        $reserva->estado = 0;
        $reserva->id_tbk = $tbk->id;
        $reserva->id_especialidad = $post['id_reserva'];
        $reserva->fecha = $newDate;
        $reserva->hora =  $newDate2;
        $reserva->termino = date("H:i:s", strtotime($str_unidades,strtotime($newDate2)));
        $reserva->correo = strtolower($post['email']);
        $reserva->nombre = strtolower($post['nombre']);
        $reserva->rut = $post["rut"];
        $reserva->telefono = $post["telefono"];
        $reserva->save();


        $search = Clientes::select("email")->where("email", strtolower($post["email"]))->get();


        if(count($search) <= 0){
            $cliente = new Clientes();
            $cliente->nombre = strtolower($post["nombre"]);
            $cliente->rut = $post["rut"];
            $cliente->telefono = $post["telefono"];
            $cliente->email = strtolower($post["email"]);
            $cliente->save();
        }


        $rul_to_pay = self::start_web_payu_plus_transaction($tbk);
        return $rul_to_pay;

    }

    public function start_web_payu_plus_transaction($nueva_compra){
        // $token = csrf_token();
        $transaccion = (new Transaction)->create(
            $nueva_compra->id,
            $nueva_compra->session_id,
            $nueva_compra->total,
            //route("./confirmar_pago") // url return
            "https://eternite.cl/confirmar_pago",
            csrf_token()
           // url return
        );
        

        $tbk = $transaccion->getToken(); 
        $url = $transaccion->getUrl().'?token_ws='.$tbk;

        return $url;
    }


    public function confirmar_pago(Request $request){
        
        $confirmacion = (new Transaction)->commit($request->get("token_ws"));
       


        $tbk = Transbank::where("id", $confirmacion->buyOrder)->get()[0];

        if($confirmacion->isApproved()) {
            $reservas = Reservas::where("id_tbk",  $confirmacion->buyOrder)->get()[0];
            $reservas["estado"] = 1;
            $reservas->update();
            // se rebaja la cantidad de opciones de reserva
            $tbk->status = 2;
            $tbk->token = $request->get("token_ws");
            $tbk->card_detail = $confirmacion->getCardDetail()["card_number"];
            $tbk->payment_type_code = $confirmacion->getPaymentTypeCode();
            $tbk->installments_amount = $confirmacion->getInstallmentsAmount() == 0 ? 0 : $confirmacion->getInstallmentsAmount();
            $tbk->installments_number = $confirmacion->getInstallmentsNumber() == 0 ? 0 : $confirmacion->getInstallmentsNumber();
            $tbk->update();


         
            $unidades = Especialidad::select("unidades")->where("id", $reservas['id_especialidad'])->first()["unidades"];

            $data = Horario::select("h.id")
                    ->where("h.fecha_reserva", $reservas["fecha"])
                    ->where("h.hora_reserva", $reservas["hora"])
                    ->get()[0];

            $cont = $data->id; 
            for ($i=0; $i < $unidades ; $i++) {
                $val = Horario::where("id", $cont)->get()[0];
                DB::table('horario')
                    ->where('id', $cont)
                    ->update(['cupos' => $val->cupos == 0 ? 0 : $val->cupos - 1]);
                $cont ++;
            }



            $datra_encript = base64_encode($tbk["id"]);

            $correo = new ReservaMailable($confirmacion->buyOrder);

            Mail::to($reservas["correo"])->send($correo);
            Mail::to("administrador@eternite.cl")->send($correo);
    

            return redirect("./pago_correcto"."?compra_id=".$datra_encript);
            
        }else{
            return redirect("./pago_rechazado"."?compra_id="); 
        }

        return $request;
    }


    public function pago_correcto(Request $request){ 

        $phone = $this->get_phone()[0]["resultado"];
        $direccion = $this->get_adrees()[0]["resultado"];
        $email_contact = $this->get_email_contact()[0]["resultado"];
        $facebook = $this->get_facebook()[0]["resultado"];
        $twtter = $this->get_twtter()[0]["resultado"];

        $compra_id = base64_decode($request["compra_id"]);

        
        $tbk = Transbank::where("id", $compra_id)->get();
        
        $reserva = Reservas::select("hora", "fecha", "e.nombre AS especialidad")->where("id_tbk", $compra_id )
                    ->join("especialidad AS e", "reservas.id_especialidad", "e.id")            
                    ->get();
     


        $fecha_compra = date('d', strtotime($tbk[0]["fecha"])).'-'.date('m', strtotime($tbk[0]["fecha"])).'-'.date('Y', strtotime($tbk[0]["fecha"]));
        $hora_compra = date('H', strtotime($tbk[0]["fecha"])).':'.date('s', strtotime($tbk[0]["fecha"]));

        $fecha_reserva =  date('d', strtotime($reserva[0]["fecha"])).'-'.date('m', strtotime($reserva[0]["fecha"])).'-'.date('Y', strtotime($reserva[0]["fecha"]));;
        $hora_reserva = date('H', strtotime($reserva[0]["hora"])).':'.date('s', strtotime($reserva[0]["hora"]));;

        $especialidad = $reserva[0]["especialidad"];

        $tipo_tarjeta = Payment_type_code::select("nombre")->where("tipe", $tbk[0]["payment_type_code"])->get()[0]["nombre"];

        $n_tarjeta = $tbk[0]["card_detail"];

        $selected = 0;

        $n_ctas = $tbk[0]["installments_number"];
        $val_ctas = $tbk[0]["installments_amount"];
        $val_total = $tbk[0]["total"];

        $if_credit = $tbk[0]["payment_type_code"];

        $facebook = $this->get_facebook()[0]["resultado"];


        return view("pago_correcto", compact("tipo_tarjeta","especialidad", "fecha_compra", "hora_compra", "fecha_reserva", "hora_reserva", "n_ctas", "val_ctas",
                                            "selected", "phone", "direccion", "email_contact", "facebook", "twtter", "compra_id", "n_tarjeta", "if_credit", "val_total"));
    }

    public function pago_rechazado(){

        return "pago_rechazado";
    }

    public function pago_aceptado_demo(){
        return "pago demo correcto";
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
