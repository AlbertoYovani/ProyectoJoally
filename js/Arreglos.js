$(document).ready(function(){
    $('body').on('click','.ventana',function () {
        bootbox.dialog({
            title:'Realizar mi Pedido',
            message:'<div class="row">'+
                        '<div class="col-md-3">'+
                            '<div class="ventana_arreglo">'+
                            '<img src="">'+
                        '</div>'+
                        '</div>'+
                        '<div class="col-md-9">'+
                            '<table>'+
                                '<tr>'+
                                    '<td>Nombre :</td>'+
                                    '<td> <input type="text" name="campo2" class="form-control pedido opc" disabled="true"></td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Tamaño :</td>'+
                                    '<td>'+
                                        '<select class="form-control pedido opc">'+
                                        '<option>Sin Chocolate</option>'+
                                        '<option>Con Chocolate</option>'+
                                        '<option>Con Extra-Chocolate</option>'+
                                        '</select>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Descripción :</td>'+
                                    '<td> <textarea name="descripcion" class="form-control pedido opc " disabled="true">'+
                                          '</textarea>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Precio :</td>'+
                                    '<td> <input type="number" name="precio" class="form-control pedido opc" disabled="true"></td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Cantidad :</td>'+
                                    '<td> <input type="number" name="cantidad" class="form-control pedido opc" min="1" ></td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Dedicatoria :</td>'+
                                    '<td> <textarea name="dedicatoria" class="form-control pedido opc" placeholder="Mi tarjeta tiene que decir... "></textarea></td>'+
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