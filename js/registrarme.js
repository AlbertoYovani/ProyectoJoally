$(document).ready(function(){
    $('body').on('click','.avisoderegistro',function () {
        bootbox.dialog({
            
            title:'Realizar un pedido',
            message:'<div class="row">'+
                        '<div class="col-md-1">'+
                            '</div>'+
                            '<div class="col-md-11">'+
                                '<p>Para poder realizar tu pedido crea tu cuenta, no te quitara mas de 1 munito</p>'+
                            '</div>'+
                    '</div>',
            buttons:{
                Cancelar:{
                    label:'Cancelar',
                    className:'btn btn-primary',
                    callback:function () {
                        
                    }
                },Aceptar:{
                    label:'Registrarme',
                    className:'btn btn-primary',
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


