$(document).ready(function(){
    $('body').on('click','.avisoderegistro',function () {
        bootbox.dialog({
            title:'Realizar un pedido',
            message:'<div class="row">'+
                        '<div class="col-md-11">'+
                            '<p class="tamanio">Crea tu cuenta, para realizar pedidos en todo momento.</p>'+
                        '</div>'+
                    '</div>',
            size:'small',
            buttons:{
                Aceptar:{
                    label:'Registrarme',
                    className:'estilobtn',
                    callback:function () {
                        location.href = "RegistraCliente.php";
                    }
                }
            }
            //para cerrar la ventan de pedidos con la tecla Esc
            ,onEscape:function(){}
        })
    })
})


