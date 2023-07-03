<?php

use App\Models\Packs_planes;
use App\Models\NewNav;
use App\Models\Configuracion;
use App\Models\EspecialidadReestriccion;

function format_money($monto){
    return "$ ".number_format($monto,0,",",".");
}



function servicios_packs($id_pack){
    return Packs_planes::select("accion")->where("id_pack",$id_pack)->get();
}

function get_restriccion($id_pack){
    return EspecialidadReestriccion::select("nota")->where("id_especialidad", $id_pack)->get();
}

// * muestra el nuevo nav con las opciones modificadas
function servicios()
{
    return NewNav::orderby("nombre", "ASC")->get();
}