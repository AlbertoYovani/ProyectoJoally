$(document).ready(function (e) {
    $('input[name=arreglo_nombre]').keypress(function (event) {
        if (event.which == 13 || event.keyCode == 13) {
            BuscarArreglo($(this).val(),'','')
        }
        
    })
    $('select[name=arreglo_clasficacion]').change(function () {
        BuscarArreglo('',$(this).val(),'');
    })
    function BuscarArreglo(arreglo_nombre,arreglo_clasificacion,arreglo_tamanio) {
        $('.row-list-arreglos').html('');
        $.ajax({
            url: "controlador/AjaxArreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                arreglo_nombre:arreglo_nombre,
                arreglo_clasificacion:arreglo_clasificacion,
                arreglo_tamanio:arreglo_tamanio,
                accion:'BUSCAR_ARREGLOS'
            },beforeSend: function (xhr) {
                $('.col-buscando-arreglos').removeClass('hide');
            },success: function (data, textStatus, jqXHR) {
                $('.col-buscando-arreglos').addClass('hide');
                $('.row-list-arreglos').html(data.arreglos);
            },error: function (e) {
                console.log(e);
            }
        })
    }
})