$(document).ready(function (){
    $('.form-login').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "login.php",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                console.log('Iniciando sesión');
            },success: function (data, textStatus, jqXHR) {
                console.log(data)
                if(data.accion=='1'){
                    alert("Bienvenido");
                    location.href= 'PrincipalArreglos.php';
                }if(data.accion='2'){
                    $('.form-login')[0].reset();   
                    $('.login-error').html('El Usuario y/o Contraseña no existe');
                }
            },error: function (e) {
                console.log(e);
            }
        })
    })
})



