$(document).ready(function (){
    $('body').on('click','.inisiosesion',function () {
        bootbox.dialog({
                    title:'Iniciar Sesión',
                    message:'<div class="row" style="height:230px !important;">'+
                                '<div class="col-md-11">'+
                                    '<table>'+
                                        '<tr>'+
                                           '<td>'+
                                                '<br><br>'+
                                                '<input style="width:270px !important;" type="text" required="required" class="form-control" name="usuario" placeholder="Usuario" autofocus="true">'+
                                                '<br><br>'+
                                                '<input style="width:270px !important;" type="password" required="required" class="form-control" name="ClPassword1" placeholder="Contraseña">'+ 
                                                '<br><br>'+
                                                '<a href="RegistraCliente.php">Registrarme</a>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr class="login-error" style="color: #FF0000; height: 100%; width: 150px !important">'+
                                        '</tr>'+
                                    '</table>'+
                                '</div>'+
                            '</div>',
                    size:'small',
                buttons:{
                    Cancelar:{
                        label:'Cancelar',
                        className:'estilobtn',
                        callback:function () {
                        }
                    },Aceptar:{
                        label:'Aceptar',
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
                                        accion:'InisioSesion',
                                    },beforeSend: function (xhr) {
                                      msj_loading();
                                    },success: function (data, textStatus, jqXHR) {
                                        if(data.accion=='1'){
                                            bootbox.hideAll();
                                            alert("Bienvenido");
                                            location.href= 'PrincipalArreglos.php';
                                        }if(data.accion='2'){ 
                                            alert("Usuario y/o Contraseña no existess");
                                            //$('.login-error').html('El Usuario y/o Contraseña no existe');
                                        }
                                },error: function (e) {
                                    console.log(usuario)
                                    console.log(ClPassword1)
                                    console.log(e)
                                    msj_error_serve();
                                }
                            })
                        }
                    }
                }
            //para cerrar la ventan de pedidos con la tecla Esc
            ,onEscape:function(){}
        });
    })
})




