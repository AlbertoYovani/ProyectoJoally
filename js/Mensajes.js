var msj_loading=function () {
    bootbox.dialog({
        title:'<h5 style="color:white">Espere por favor...</h5>',
        message:'<div class="row">'+
                    '<div class="col-md-12">'+
                        '<center><i class="fa fa-spinner fa-pulse fa-3x"></i></center>'+
                    '<div>'+
                '</div>',
        size:'small'
    })
}
var TotalArreglos=function () {
    $.ajax({
        url: "controlador/Arreglos.php",
        type: 'POST',
        dataType: 'json',
        data:{
            accion:'ObtenerTotal'
        },beforeSend: function (xhr) {
        },success: function (data, textStatus, jqXHR) {
            $('body .cantidad-productos').html(data.total);
        },error: function (e) {
            console.log(e)
        }
    })
}
var msj_error_noti=function (msj){
        Messenger().post({
            message: msj,
            type: 'error',
            showCloseButton: true
        }); 
    }
    var msj_error_serve=function (error){
        Messenger().post({
            message: 'Error al procesar la petición al servidor ',
            type: 'error',
            showCloseButton: true
        }); 
        (error==undefined ? '' :  console.log(error))
    }
    var  msj_success_noti=function (msj){
        Messenger().post({
            message: msj,
            showCloseButton: true
        }); 
    }
    $('.tip').tooltip();