$(document).ready(function(){
    $('body').on('click','.entrega',function () {
        bootbox.dialog({
            
            title:'Lo necesito para:',
            message:'<div class="row">'+
                    '<div class="col-md-12">'+
                            '<table style= "margin-left:60px !important">'+
                                '<tr>'+
                                    '<td>Costo de envio:</td>'+
                                    '<td><input type="text" name="costo" class="form-control pedido opci" value="$30.00" disabled="true"> </td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Fecha de envio: </td>'+
                                    '<td> <input type="date" name="fechaentrega" class="form-control pedido opci"></td>'+
                                '</tr>'+                                
                                '<tr>'+
                                    '<td>Lo recibe:</td>'+
                                    '<td><input type="text" name="recibe" class="form-control pedido opci" ></td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Direccion: </td>'+
                                    '<td> <textarea name="direccion" class="form-control pedido opci" placeholder="Dirección"></textarea></td>'+
                                '</tr>'+
                            '</table>'+
                        '</div>'+
                    '</div>',
            buttons:{
                Cancelar:{
                    label:'Cancelar',
                    className:'estilobtn',
                },Aceptar:{
                    label:'Aceptar',
                    className:'estilobtn',
                    callback:function () {
                        $.ajax({
                            url: "controlador/Arreglos.php",
                            type: 'POST',
                            dataType: 'json',
                            data:{
                                accion:'EntregaDomicilio'
                            },beforeSend: function (xhr) {
                                msj_loading();
                            },success: function (data, textStatus, jqXHR) {
                                if(data.accion=='1'){
                                    msj_success_noti('Pedido Realizado');
                                    bootbox.hideAll();
                                    TotalArreglos();
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
        })
    })
    $('body').on('click','.entregaDomicilio',function () {
        bootbox.dialog({
            
            title:'Lo necesito para:',
            message:'<div class="row">'+
                    '<div class="col-md-12">'+
                            '<table style= "margin-left:60px !important">'+
                                '<tr>'+
                                    '<td>Fecha de entrega: </td>'+
                                    '<td> <input type="date" name="fechaentrega" class="form-control pedido opci"></td>'+
                                '</tr>'+
                            '</table>'+
                        '</div>'+
                    '</div>',
            buttons:{
                Cancelar:{
                    label:'Cancelar',
                    className:'btn estilobtn',
                    callback:function () {
                    }
                },Aceptar:{
                    label:'Aceptar',
                    className:'btn estilobtn',
                    callback:function () {
                        $.ajax({
                            url: "controlador/Arreglos.php",
                            type: 'POST',
                            dataType: 'json',
                            data:{
                                accion:'RecojerSucursal'
                            },beforeSend: function (xhr) {
                                msj_loading();
                            },success: function (data, textStatus, jqXHR) {
                                if(data.accion=='1'){
                                    msj_success_noti('Pedido Realizado');
                                    bootbox.hideAll();
                                    TotalArreglos();
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
        })
    })
})