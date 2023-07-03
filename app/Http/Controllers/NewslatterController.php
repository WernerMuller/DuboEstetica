<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newslatter;
use Illuminate\Support\Facades\DB;
use App\Models\Configuracion;

use App\Mail\NewslatterMailable;
use Illuminate\Support\Facades\Mail;

class NewslatterController extends Controller{

    public function insert_new_newslatter(request $request){
        $data = $request->all();
        $name = $data["name"];
        $email = $data["email"];

        $data = Newslatter::select("email")->where("email", $email)->get();

        $return = False;

        if(count($data) >= 1){
            $return = True;
        }else{

            DB::table("newslatter")->insert(
                ["nombre" => strtolower($name),
                "email" => strtolower($email)]);

            $email_contacto = $this->get_email_contact();
            
            $correo = new NewslatterMailable($name, $email);

            Mail::to($email_contacto)->send($correo);

            $return = False;
        }

       

        return $return;
    }


    function get_email_contact(){
        return Configuracion::select("c.resultado")->where("c.dato","email-contacto")->get()[0]["resultado"];
    }

}
