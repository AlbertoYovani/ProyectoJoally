$(document).ready(function (){
    $('#nuevo_registro').submit(function (e){
        e.preventDefault();
        var contra1= $('input[name=contrasenia]').val();
        var contra2= $('input[name=confcontrasenia]').val();
        console.log(contra1);
        console.log(contra2);
        if( contra1 == contra2){
            
            $.ajax({
                url:"controlador/NuevoCliente.php",
                type:"POST",
                dataType: 'json',
                data:$(this).serialize(),
                beforeSend: function (xhr) {
                    $('.mensaje').html('Enviando...');
                },success: function (data, textStatus, jqXHR) {
                   console.log(data);
                   if(data.mensaje=='1'){
                       location.href = 'index.php';
                   }
                },error: function (error) {
                    console.log(error);
                }
            })
            
        }else{
            alert("Las contraseñas no coinciden");
        }
    })
})

