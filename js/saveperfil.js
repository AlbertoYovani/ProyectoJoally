$(document).ready(function (){
    $('#nuevo_registro').submit(function (e) {
        e.preventDefault();
        var ClPassword1=$('input[name=ClPassword1]').val();
        var ClPasswordConf=$('input[name=ClPassword2]').val();
        if(ClPassword1 === ClPasswordConf){
           $.ajax({
            url: "controlador/NuevoCliente.php",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                console.log('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                console.log(data)
                if(data.accion=='1'){
                        msj_success_noti("Registro Guardado");
                    location.href= 'PrincipalArreglos.php';
                }
            },error: function (e) {
                console.log(e);
            }
        })
        
        }else{
            msj_error_noti("¡Las contraseñas no coinciden!"); 
        }
        
    })
})


