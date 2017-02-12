$(document).ready(function(){
    $('body').on('click','.ver-arreglo',function () {
        var id=$(this).attr('data-id');
        $.ajax({
            url: "controlador/Arreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                id:id,
                accion:'ver_detalles'
            },beforeSend: function (xhr) {
                msj_loading();
            },success: function (data, textStatus, jqXHR) {
                console.log(data.Clasificaciones)
                bootbox.hideAll();
                bootbox.dialog({
                    title:'<h5 style="color:white!important;padding-bottom: 2px!important">Realizar mi Pedido</h5>',
                    message:'<div class="row">'+
                                '<div class="col-md-6">'+
                                    '<img src="'+data.ArregloImagen+'" style="width:100%">'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Nombre</div>'+
                                            '<input type="text" class="form-control" value="'+data.ArregloNombre+'">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="form-group" style="font-size:15px;line-height:1.2">'+
                                        '<label style="color: #6f6f6f !important">Decripción: </label>'+data.ArregloDescripcion+
                                    '</div>'+
                                    '<div class="form-group">'+
                                        '<div class="input-group">'+
                                            '<div class="input-group-addon" style="background: transparent;border: 1pxtransparent!important: ">Precio</div>'+
                                            '<input type="text" class="form-control" value="'+data.ArregloPrecio+'">'+
                                        '</div>'+
                                    '</div>'+
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
                                                msj_success_noti('Arreglos Agregados')
                                                bootbox.hideAll();
                                                TotalArreglos();
                                            }
                                        },error: function (e) {
                                            console.log(e)
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
            }
        })
    }
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
                       if(res==true){
                           
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
                                        msj_success_noti('Datos Guardados');
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
            }
        })
    })
})