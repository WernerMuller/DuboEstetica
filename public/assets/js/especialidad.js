function show(array){
    $('#datepicker').datepicker({
        minDate: 0,
        beforeShowDay: function(date){
            // horario de lectura
            
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            var show = true;
                if(date.getDay()==6 || date.getDay()==0 || array.indexOf(string) == -1 ) show=false;
                return [show];
            },
            

            onSelect: function(dateText, inst) {
    
            let id_especilidad = document.getElementById("select-esp").value;
            let fecha = document.getElementById("datepicker").value;

            const parametros = {"fecha":fecha, "id_especilidad" : id_especilidad};
            const option = document.getElementById("horario-filtro");
            option.innerHTML = `<option value="0">Horas</option>`; 
            const send_horario = new Promise((resolve, reject) =>{
                $.ajax({
                    data: parametros,
                    url:  "https://eternite.cl/data_fecha_especialista",  
                    type: "POST", 
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend:function(){
                        Swal.fire({
                            html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                            title: 'Argegando..',
                            showCloseButton: false,
                            showCancelButton: false,
                            focusConfirm: false,
                            showConfirmButton:false,
                        })
                        $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.0)'); 
                        $(".swal2-title").css("color","white"); 
                    },
                    success:function(response){
                        resolve(response);
                    }
                });
            });
        
            send_horario.then(res=>{ 
                swal.close();
                let demo = Object.values(res);
                
               

                if(res.length <= 0){
                    option.innerHTML = `<option value="0">Sin Hora</option>`;
                }else{
                    for (let index = 0; index < demo.length; index++) {
                        const element = demo[index];
                        option.innerHTML += `<option value="${element.hora_reserva.substring(0, element.hora_reserva.length - 3)}">${element.hora_reserva.substring(0, element.hora_reserva.length - 3) }</option>`;
                    }
                }
            })
        
        }
        });
        $("#datepicker").datepicker("refresh");
}

function searh_value(id_especialidad){

        const precio = new Promise((resolve, reject) =>{
            let parametros = {"id_especialidad": id_especialidad};
            $.ajax({
                data: parametros,
                url:  "https://eternite.cl/get-precio-especialidad", 
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend:function(){
             
                },
                success:function(response){
                    resolve(response);
                }
            });
        });
    
        precio.then(res=>{
            document.getElementById("value_especialist").value = res;
        });
   


}

