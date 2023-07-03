$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    
var Fn = {
        // Valida el rut con su cadena completa "XXXXXXXX-X"
        validaRut : function (rutCompleto) {
            if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
                return false;
            var tmp 	= rutCompleto.split('-');
            var digv	= tmp[1]; 
            var rut 	= tmp[0];
            if ( digv == 'K' ) digv = 'k' ;
            return (Fn.dv(rut) == digv );
        },
        dv : function(T){
            var M=0,S=1;
            for(;T;T=Math.floor(T/10))
                S=(S+T%10*(9-M++%6))%11;
            return S?S-1:'k';
        }
    }



function agregar_registro_hora(e){
    e.preventDefault();
    console.log(_Url);
    let nombre = document.getElementById("name").value;
    let rut = document.getElementById("rut").value;
    let telefono = document.getElementById("telefono").value;
    let email = document.getElementById("email").value;
    let especialidad = document.getElementById("select-esp").value
    let fecha = document.getElementById("datepicker").value;
    let hora = document.getElementById("horario-filtro").value

    let email_validador = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    if(nombre == "" || rut == "" || telefono == "" || email == ""){
        Swal.fire('Error','Debe llenar todos los campos para continuar','error');
    }else if(especialidad == 0){
        Swal.fire('Error','Debe seleccionar una especialidad','error');
    }else if(fecha == 0){
        Swal.fire('Error','Debe seleccionar una fecha para continuar','error');
    }else if(hora == 0){
        Swal.fire('Error','Debe seleccionar una hora para continuar','error');
    }else if( !Fn.validaRut(rut) ){
        Swal.fire('Error','Rut invalido','error');
    }else if(!email_validador.test(email)){
        Swal.fire('Error','Email invalido','error');
    }else{
        const parametros = {"pgo": 6969,"nombre" : nombre, "rut" : rut, "email" : email, "telefono" :telefono, "id_reserva" : especialidad, "fecha_reserva":fecha, "hora_reserva": hora};
        const send_emal = new Promise((resolve, reject) =>{
            $.ajax({
                data: parametros,
                // url:  _Url+"api/iniciar_compra", 
                url:  _Url+"iniciar_compra", 
                type: "POST",
                // dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend:function(){
                    Swal.fire({
                        html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                        title: 'cargando..',
                        showCloseButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:false,
                    })
                    $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.0)');//Optional changes the color of the sweetalert
                    $(".swal2-title").css("color","white");
                },
                success:function(response){
                    resolve(response);
                }
            });
        });

        send_emal.then(reg=>{
            window.location.href = reg;
        });
    }
   

}

function clean_button(e){
    e.preventDefault();
    alert("limpiando");
}