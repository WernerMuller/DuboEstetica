function send_contacto(e){ 
    // console.log("iniciando msg: ");
    e.preventDefault();
    let nombre = document.getElementById("contact_name").value;
    let email = document.getElementById("contact_email").value;
    let subject = document.getElementById("contact_subject").value;
    let msg = document.getElementById("message").value;

    // console.log(nombre, email, subject, msg);

    let email_validador = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    if(nombre == "" || email == "" || subject == "" || msg == ""){
        Swal.fire('Error','Debe llenar todos los campos','error');
    }else if(!email_validador.test(email)){
        Swal.fire('Error','Email invalido','error');
    }else{
        // alert("sin terminar");
        const parametros = {"nombre":nombre, "email":email, "subject":subject, "msg":msg};

        const send_email = new Promise((resolve, reject) =>{
            $.ajax({
                data: parametros,
                url:  _Url+"contactanos-send-email", 
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend:function(){
                    Swal.fire({
                        html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                        title: 'Enviando..espere',
                        showCloseButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:false,
                    })
                    $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.0)');//Optional changes the color of the sweetalert
                    $(".swal2-title").css("color","white");
                },
                success:function(response){
                    console.log(response)
                    resolve(response);
                }
            });
        });

        send_email.then(res=>{
            if(res == "ok"){
                Swal.fire('Contacto','Su correo se envío correctamente, nos contactaremos en breve con ud.','success');
            }else{
                Swal.fire('Error','Ocurrió un error intenté más tarde','error');
            }
            document.getElementById("contact_name").value = "";
            document.getElementById("contact_email").value = "";
            document.getElementById("contact_subject").value = "";
            document.getElementById("message").value = "";
        })
    }
}
