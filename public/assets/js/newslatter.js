function insert_newslatter(e){
    e.preventDefault();
    let name = document.getElementById("subscribe_name").value;
    let email = document.getElementById("subscribe_email").value;

    let ver_email = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i

    if(name == "" || email == ""){
        Swal.fire('Error','Debe completar todos los campos para registrarte','error')
    }else if(!ver_email.test(email)){
        Swal.fire('Error','El Email es Invalido','error')
    }else{
        const new_email = new Promise((resolve, reject) =>{
            let parametros = {"email" : email, "name": name}
            $.ajax({
                data: parametros,
                url:  "./insert-new-newslatter", 
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend:function(){
                    Swal.fire({
                        html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                        title: 'Registrando..espere...',
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
    
        new_email.then(res=>{
            document.getElementById("subscribe_name").value = "";
            document.getElementById("subscribe_email").value = "";
            Swal.fire('Newslatter','Gracias por suscribirte','success');
        })
    }

   

}