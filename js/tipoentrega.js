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
                                '<tr>'+
                                    '<td>Dato extra: </td>'+
                                    '<td> <input type="text" name="datoextra" class="form-control pedido opci" placeholder="Mi casa es de color..."></td>'+
                                '</tr>'+
                            '</table>'+
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
                        var cantidad=parseInt($('body input[name=cantidad]').val());
                        var TotalActual=parseInt($('body .cantidad-productos').text());
                        var NuevoTotal=(TotalActual+cantidad);
                        $('body .cantidad-productos').text(NuevoTotal);
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
                    className:'estilobtn',
                    callback:function () {
                        
                    }
                },Aceptar:{
                    label:'Aceptar',
                    className:'estilobtn',
                    callback:function () {
                        var cantidad=parseInt($('body input[name=cantidad]').val());
                        var TotalActual=parseInt($('body .cantidad-productos').text());
                        var NuevoTotal=(TotalActual+cantidad);
                        $('body .cantidad-productos').text(NuevoTotal);
                    }
                }
            }
            //para cerrar la ventan de pedidos con la tecla Esc
            ,onEscape:function(){}
        })
    })
})