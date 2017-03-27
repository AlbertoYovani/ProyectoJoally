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
                console.log(data);
                if(data.accion==='1'){
                        msj_success_noti("Registro Guardado");
                    location.href= 'PrincipalArreglos.php';
                }
            },error: function (e) {
                console.log(e);
            }
        });
        }else{
            msj_error_noti("¡Las contraseñas no coinciden!"); 
        }
    });
    $('body').on('click','.editardatos', function (){
        var correo = $('body input[name:correo]').val();
        alert(correo);
        bootbox.dialog({
           title:'Modificar mis datos',
           message:'<div class="row">'+
                '<div class="col-md-6">'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-user color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="Nombre Completo" name="nombre" type="text" maxlength="40" value="">'+
                    '</div>'+
                    '<br>'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-envelope color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="ejemplo@hotmail.com" name="correo" type="email" >'+
                    '</div>'+
                    '<br>'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-phone color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="919 168 86 97" name="telefono" type="text" required="" maxlength="12" pattern="[0-9]{10,12}">'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6 ">'+
                '<div class="input-group">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-birthday-cake color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="Fecha de Nacimiento" name="fechanac" type="date" >'+
                    '</div><br>'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-user-secret color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="Usuario" name="usuario" type="text" maxlength="20" >'+
                    '</div>'+
                    '<br>'+
                    '<div class="input-group form-login">'+
                        '<span class="input-group-addon back-vt" style="background:#308DE4 !important">'+
                            '<i class="fa fa-unlock-alt color-white"></i>'+
                        '</span>'+
                        '<input class="form-control" placeholder="Contraseña actual" name="ClPassword1" type="password">'+
                    '</div>'+
                '</div>'+
            '</div>',
            buttons:{
                Cancelar:{
                    label:'Cancelar',
                    className:'estilobtn',
                    callback:function () {
                    }
                },Aceptar:{
                    label:'Guardar',
                    className:'estilobtn',
                    callback:function () {
                        var usuario=$('body input[name=usuario]').val();
                        var ClPassword1=$('body input[name=ClPassword1]').val();
                            $.ajax({
                                url: "controlador/Arreglos.php",
                                type: 'POST',
                                dataType: 'json',
                                data:{
                                    usuario:usuario,
                                    ClPassword1:ClPassword1,
                                    accion:'EditarDatosCliente'
                                },beforeSend: function (xhr) {
                                  msj_loading();
                                },success: function (data, textStatus, jqXHR) {
                                    if(data.accion==='1'){
                                        bootbox.hideAll();
                                        msj_success_noti("Datos modificados correctamente");
                                        location.href="MiCuenta.php";
                                    }if(data.accion==='2'){ 
                                        alert("Usuario y/o Contraseña no existess");
                                        //$('.login-error').html('El Usuario y/o Contraseña no existe');
                                    }
                            },error: function (e) {
                                console(e);
                                msj_error_serve();
                            }
                        });
                    }
                }
            }
        });
    });
});


