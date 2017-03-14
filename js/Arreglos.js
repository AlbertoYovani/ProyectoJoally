$(document).ready(function(){
    $('body').on('click','.inisiosesion',function () {
        bootbox.dialog({
                    message:'<div class="row" style="height:50px !important;margin-top: -0px !important">'+
                                '<div class="col-md-12 col-centered" style="text-align:center;"><h3 style="color:red !important">Iniciar Sesión</h3></div></div>'+
                            '<div class="row" style="height:300px !important">'+
                                '<div class="col-md-12 col-centered form-login">'+
                                    '<br>'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon" style="background: #F00001;color: white;border: none">'+
                                                '<i class="fa fa-user"></i>'+
                                            '</span>'+
                                            '<input name="usuario" type="text" class="form-control" placeholder="Usuario">'+
                                        '</div>'+
                                    '</div><br>'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon" style="background: #F00001;color: white;border: none">'+
                                                '<i class="fa fa-unlock-alt"></i>'+
                                            '</span>'+
                                            '<input name="ClPassword1" type="password" class="form-control" placeholder="Contraseña">'+
                                        '</div>'+
                                    '<div class="form-error" style="color:red; font-size:14px !important"></div>'+    
                                    '</div><br>'+
                                    '<div class="form-group">'+
                                        '<label>'+
                                            '¿Tienes una Cuenta?<a href="RegistraCliente.php"> Registrarme</a>'+
                                        '</label>'+
                                    '</div>'+
                                    '<br>'+
                                    '<div class="form-group">'+
                                        '<button class="btn btn-primary btn-block InicioSesion" style="background-color:#F00001 !important">Iniciar Sesión</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>',
                    size:'small'
               
            //para cerrar la ventan de pedidos con la tecla Esc
            ,onEscape:function(){}
        });
    })
    $('body').on('click','.InicioSesion',function () {
        var usuario=$('body input[name=usuario]').val();
        var ClPassword1=$('body input[name=ClPassword1').val();
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                usuario:usuario,
                ClPassword1:ClPassword1,
                accion:'IniciarSesion'
            },beforeSend: function (xhr) {
            },success: function (data, textStatus, jqXHR) {
                if(data.accion==='1'){
                    bootbox.hideAll();
                    msj_loading();
                    location.href= 'PrincipalArreglos.php';
                }if(data.accion==='2'){
                    $('.form-error').html('El Usuario y/o Contraseña no existe');
                    $('.form-login')[0].reset(); 
                }
            },error: function (e) {
                console.log(e)
                msj_error_serve();
            }
        })
    })
    
    
    
    $('body').on('click','.ver-arreglo',function () {
        var id=$(this).attr('data-id');
        var filter = $(this).attr("filter");
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                id:id,
                filter:filter,
                accion:'ver_detalles',
            },beforeSend: function (xhr) {
                msj_loading();
            },success: function (data, textStatus, jqXHR) {
                bootbox.hideAll();
                bootbox.dialog({
                    title:'<h5 style="color:white!important;padding-bottom: 2px!important">Realizar mi Pedido</h5>',
                    message:'<div class="row">'+
                                '<div class="col-md-6">'+
                                    '<img src="'+data.ArregloImagen+'" style="width:80%">'+
                                '</div>'+
                                '<br>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Nombre</div>'+
                                            '<input disabled="true" type="text" class="form-control" value="'+data.ArregloNombre+'">'+
                                        '</div>'+
                                    '</div>'+
                                    '<br>'+
                                    '<div class="form-group" style="font-size:15px;line-height:1.2; color: #6f6f6f !important">'+
                                        '<label style="color: #6f6f6f !important">Decripción: </label>'+data.ArregloDescripcion+
                                    '</div>'+
                                    '<br>'+
                                    '<br>'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Cantidad</div>'+
                                            '<input type="number" name="pedidos_cantidad" min="1" max="50" class="form-control" >'+
                                        '</div>'+
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
                            label:'Aceptar',
                            className:'estilobtn',
                            callback:function () {
                                var pedidos_cantidad=$('body input[name=pedidos_cantidad]').val();
                                var arreglo_id=data.ArregloId;
                                if(pedidos_cantidad!=''){
                                    $.ajax({
                                        url: "controlador/Arreglos.php",
                                        type: 'POST',
                                        dataType: 'json',
                                        data:{
                                            arreglo_id:arreglo_id,
                                            accion:'AgregarArreglo',
                                            pedidos_cantidad:pedidos_cantidad
                                        },beforeSend: function (xhr) {
                                            msj_loading();
                                        },success: function (data, textStatus, jqXHR) {
                                            if(data.accion=='1'){
                                                msj_success_noti('Arreglos Agregados');
                                                bootbox.hideAll();
                                                TotalArreglos();
                                                window.location='PedidosTemp.php';
                                            }
                                        },error: function (e) {
                                            console.log(e)
                                            msj_error_serve();
                                        }
                                    })
                                }else{
                                    msj_error_noti('Cantidad Requerida');
                                }
                            }
                        }
                    }
                    //para cerrar la ventan de pedidos con la tecla Esc
                    ,onEscape:function(){}
                })
            },error: function (e) {
                console.log(e);
                msj_error_serve();
            }
        })
    })
    if($('input[name=Tabla]').val('Pedidos')){
        AjaxTablaPedidos();
    }
    function AjaxTablaPedidos() {
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                accion:'TablaPedidos'
            },success: function (data, textStatus, jqXHR) {
                $('.table-pedidos tbody').html(data.tr);
            },error: function (e) {
                console.log(e)
                msj_error_serve();
            }
        })
    }
    /*Seccion para la accion CAMBIAR CLASIFICACION*/
    $('body').on('click','.cambiar-clasificacion',function () {
        var arreglo_id=$(this).attr('data-id');
        var pedidos_id=$(this).attr('data-pedido');
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                arreglo_id:arreglo_id,
                accion:'ObtenerClasificacion'
            },beforeSend: function (xhr) {
                msj_loading()
            },success: function (data, textStatus, jqXHR) {
                bootbox.hideAll();
                bootbox.confirm({
                    title:'<h5>Seleccionar Clasificación</h5>' ,
                    message:'<div class="row">'+
                            '<div class="col-md-12">'+
                                '<div class="form-group">'+
                                    '<div class="input-group">'+
                                        '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Clasificación</div>'+
                                        '<select class="form-control" name="clasificacion_id">'+data.option+'</select>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>',
                    size:'small',
                    buttons:{
                        cancel:{
                            className:'btn estilobtn',
                            label:'Cancelar'
                        },confirm:{
                            className:'btn estilobtn',
                            label:'Aceptar'
                        }
                    },callback:function (res) {
                       if(res===true){
                           
                            var clasificacion_id=$('body select[name=clasificacion_id]').val();
                            $.ajax({
                                url: "controlador/Arreglos.php",
                                dataType: 'json',
                                type: 'POST',
                                data:{
                                    clasificacion_id:clasificacion_id,
                                    pedidos_id:pedidos_id,
                                    accion:'CambiarClasificacion'
                                },beforeSend: function (xhr) {
                                    msj_loading();
                                },success: function (data, textStatus, jqXHR) {
                                    bootbox.hideAll();
                                    if(data.accion=='1'){
                                        msj_success_noti('Clasificación Agregada');
                                        $('.table-pedidos tbody').html("<tr >"+
                                                                    "<td colspan='7'>"+
                                                                        "<center>"+
                                                                            "<i class='fa fa-spinner fa-pulse fa-2x'></i>"+
                                                                        "</center>"+
                                                                    "</td>"+
                                                                "</tr>");
                                        AjaxTablaPedidos();
                                    }
                                },error: function (jqXHR, textStatus, errorThrown) {
                                    msj_error_serve();
                                }
                            })
                       }
                    }
                });
                
            },error: function (e) {
                console.log(e)
                msj_error_serve();
            }
        })
    })
    /*Seccion para la accion CAMBIAR TAMAÑO*/
    $('body').on('click','.cambiar-tamanio',function () {
        var arreglo_id=$(this).attr('data-id');
        var pedidos_id=$(this).attr('data-pedido');
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                arreglo_id:arreglo_id,
                accion:'ObtenerTamanio'
            },beforeSend: function (xhr) {
                msj_loading()
            },success: function (data, textStatus, jqXHR) {
                bootbox.hideAll();
                bootbox.confirm({
                    title:'<h5>Seleccionar Tamaño</h5>' ,
                    message:'<div class="row">'+
                            '<div class="col-md-12">'+
                                '<div class="form-group">'+
                                    '<div class="input-group">'+
                                        '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Tamaño</div>'+
                                        '<select class="form-control" name="tamanio_id">'+data.option+'</select>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>',
                    size:'small',
                    buttons:{
                        cancel:{
                            className:'btn estilobtn',
                            label:'Cancelar'
                        },confirm:{
                            className:'btn estilobtn',
                            label:'Aceptar'
                        }
                    },callback:function (res) {
                       if(res==true){
                            var tamanio_id=$('body select[name=tamanio_id]').val();
                            $.ajax({
                                url: "controlador/Arreglos.php",
                                dataType: 'json',
                                type: 'POST',
                                data:{
                                    tamanio_id:tamanio_id,
                                    pedidos_id:pedidos_id,
                                    accion:'CambiarTamanio'
                                },beforeSend: function (xhr) {
                                    msj_loading();
                                },success: function (data, textStatus, jqXHR) {
                                    bootbox.hideAll();
                                    if(data.accion=='1'){
                                        msj_success_noti('Tamaño Agregado');
                                        $('.table-pedidos tbody').html("<tr >"+
                                                                    "<td colspan='7'>"+
                                                                        "<center>"+
                                                                            "<i class='fa fa-spinner fa-pulse fa-2x'></i>"+
                                                                        "</center>"+
                                                                    "</td>"+
                                                                "</tr>");
                                        AjaxTablaPedidos();
                                    }
                                },error: function (jqXHR, textStatus, errorThrown) {
                                    msj_error_serve();
                                }
                            })
                       }
                    }
                });
                
            },error: function (e) {
                console.log(e)
                msj_error_serve();
            }
        })
    })
    /*Agregar la DEDICATORIA*/
    $('body').on('click','.agregadedicatoria',function () {
        var pedidos_id=$(this).attr('data-pedido');
        var dedi=$(this).attr('data-dedicatoria');
        $.ajax({
            url: "controlador/Arreglos.php",
            type: "POST",
            dataType:'json',
            data:{
            pedidos_id:pedidos_id,
            accion:'ObtenerDedicatoria',    
            }, beforeSend: function (xhr) {
                msj_loading();
            }, success: function (data,textStatus, jqXHR) {
                if(data.accion=='1'){
                    bootbox.hideAll();
                    bootbox.dialog({
                    title:'Mi tarjeta tiene que decir',
                    message:'<div class="row">'+
                                '<div class="col-md-11">'+
                                    '<textarea name="dedicatoria" placeholder="Te deseo..." style="width:270px !important; height:90px !important; border:none !important" autofocus  maxlength="50">'+dedi+'</textarea>'+
                                '</div>'+
                            '</div>',
                    size:'small',
                        buttons:{
                            Aceptar:{
                                label:'Ok',
                                className:'estilobtn',
                                callback:function () {
                                    var dedicatoria=$('body textarea[name=dedicatoria]').val();
                                        $.ajax({
                                            url: "controlador/Arreglos.php",
                                            type: 'POST',
                                            dataType: 'json',
                                            data:{
                                                dedicatoria:dedicatoria,
                                                pedidos_id:pedidos_id,
                                                accion:'InsetarDedicatoria'
                                            },beforeSend: function (xhr) {

                                            },success: function (data, textStatus, jqXHR) {
                                               bootbox.hideAll();
                                                if(data.accion=='1'){
                                                    msj_success_noti('Dedicatoria agregada');
                                                    $('.table-pedidos tbody').html("<tr >"+
                                                                                "<td colspan='7'>"+
                                                                                    "<center>"+
                                                                                        "<i class='fa fa-spinner fa-pulse fa-2x'></i>"+
                                                                                    "</center>"+
                                                                                "</td>"+
                                                                            "</tr>");
                                                    TotalArreglos();
                                                    AjaxTablaPedidos();
                                            } 
                                        },error: function (e) {
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
               }
            }
        })
        
    })
    /*Eliminar arreglo de pedido*/
    $('body').on('click','.eliminarpedido',function () {
        
        var pedidos_id=$(this).attr('data-pedido');
        bootbox.dialog({
                size:'small',
                title:'¿Desea eliminar este pedido?',
                message:'<div class="row">'+
                        '</div>',
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
                                $.ajax({
                                    url: "controlador/Arreglos.php",
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{
                                        pedidos_id:pedidos_id,
                                        accion:'EliminarPedido'
                                    },beforeSend: function (xhr) {

                                    },success: function (data, textStatus, jqXHR) {
                                       bootbox.hideAll();
                                    if(data.accion=='1'){
                                        msj_success_noti('Pedido Eliminado');
                                        $('.table-pedidos tbody').html("<tr >"+
                                                                    "<td colspan='7'>"+
                                                                        "<center>"+
                                                                            "<i class='fa fa-spinner fa-pulse fa-2x'></i>"+
                                                                        "</center>"+
                                                                    "</td>"+
                                                                "</tr>");
                                        TotalArreglos();
                                        AjaxTablaPedidos();

                                    } 
                                },error: function (e) {
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
    /*Filtro de los precios de los arreglos, dependiendo de su tamaño*/
    $('.precio').click(function(){
            var id_arreglo = $(this).attr("data-id");
            var id_tamanio = $(this).attr("id");
            $.ajax({
                url: "controlador/Arreglos.php",
                type: 'POST',
                data:{
                    id_arreglo:id_arreglo,
                    id_tamanio:id_tamanio,
                    accion:'filtroprecio'
                },beforeSend: function (xhr) {
                },success: function (data, textStatus, jqXHR) {
                    $('#precios').html(data);
                },error: function (e) {
                    console.log(e)
                    msj_error_serve();
                }
            })
    });
})