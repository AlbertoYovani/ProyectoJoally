$(document).ready(function(){
    $('body').on('click','.inisiosesion',function () {
        bootbox.dialog({
                    message:'<div class="row" style="height:50px !important;margin-top: -0px !important">'+
                                '<div class="col-md-12 col-centered" style="text-align:center;"><h3 style="color:#F00001 !important">Iniciar Sesión</h3></div></div>'+
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
                                        '<label style="color:#F00001 !important">'+
                                            '¿Tienes una Cuenta?<a href="RegistraCliente.php" style="color:#337ab7 !important"> Registrarme</a>'+
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
    });
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
                console.log(e);
                msj_error_serve();
            }
        });
    });
    $('body').on('click','.agregar-pedido',function () {
        var pedidos_cantidad=$('body input[name=pedidos_cantidad]').val();  //obtenemos la cantidad de arreglos
        var arreglo_nombre = $('body input[name=arreglo_nombre]').val();    //obtendres que arreglo es el que pidio
        var tamanio_precio = $('body input[name=tamanio_id]').val();            //Obtendremos el tamaño de arreglo, para poder tener el precio
        var clasificacion_id = $('body input[name=clasificacion_id]').val();//Obtendremos la clasifiacion a la cual corresponde
        if(pedidos_cantidad!=='' && tamanio_precio !==''){
            $.ajax({
                url: "controlador/Arreglos.php",
                type: 'POST',
                dataType: 'json',
                data:{
                    arreglo_nombre:arreglo_nombre,
                    tamanio_precio:tamanio_precio,
                    clasificacion_id:clasificacion_id,
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
                    else{
                        msj_error_noti("Error al insertar");
                    }
                },error: function (e) {
                    console.log(e);
                    msj_error_serve();
                }
            });
        }else{
            if(tamanio_precio!==''){
                msj_error_noti('Cantidad Requerida');
            }else{
                msj_error_noti('Elija un tamaño por favor');
            }
        }
    });
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
                console.log(e);
                msj_error_serve();
            }
        });
    }
    
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
                                            console.log(e);
                                            msj_error_serve();
                                        }
                                    });
                                }
                            }
                        }
                        //para cerrar la ventan de pedidos con la tecla Esc
                        ,onEscape:function(){}
                    });
               }
            }
        });
        
    });
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
                                    if(data.accion==='1'){
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
                                    console.log(e);
                                    msj_error_serve();
                                }
                            });
                        }
                    }
                }
            //para cerrar la ventan de pedidos con la tecla Esc
            ,onEscape:function(){}
        });
    });
    $('.Precio-arreglo-tamanio').click(function (e){
            var arreglo_nombre = $('body input[name=arreglo_nombre]').val();
            var tamanio = $(this).attr('data-tamanio');
            $.ajax({
                url: "controlador/Arreglos.php",
                type: 'POST',
                data: {
                    arreglo_nombre:arreglo_nombre,
                    tamanio:tamanio,
                    accion:'filtroprecio'
            },beforeSend: function (e) {
            },success: function (data) {
                $('.precio-arreglo h2').html("MXN$ "+data+".00");
            }, error: function (e) {
                console.log(e);
                msj_error_serve();
            }
        });
    });
    $('.Precio-arreglo-tamanio').click(function (e){
        e.preventDefault();
        var arreglo_nombre = $('body input[name=arreglo_nombre]').val();
        var tamanio = $(this).attr('data-tamanio');
            $.ajax({
                url: "controlador/Arreglos.php",
                type: 'POST',
                data: {
                    arreglo_nombre:arreglo_nombre,
                    tamanio:tamanio,
                    accion:'filtroprecio'
            },beforeSend: function (e) {
            },success: function (data) {
                $("#tamanio_id").val(data);
            }, error: function (e) {
                console.log(e);
                msj_error_serve();
            }
        });
    });
});