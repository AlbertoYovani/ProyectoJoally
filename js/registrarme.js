$(document).ready(function(){
    $('body').on('click','.avisoderegistro',function () {
        bootbox.dialog({
            title:'Realizar un pedido',
            message:'<div class="row">'+
                        '<div class="col-md-11">'+
                            '<p class="losp tamanio">Para poder realizar tu pedido crea tu cuenta, no te quitara mas de 1 munito</p>'+
                        '</div>'+
                    '</div>',
            buttons:{
                Cancelar:{
                    label:'Cancelar',
                    className:'estilobtn',
                    callback:function () {
                        
                    }
                },Aceptar:{
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


