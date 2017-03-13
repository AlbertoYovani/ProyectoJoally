$(document).ready(function (e) {
    $('input[name=arreglo_nombre]').keypress(function (event) {
        if (event.which == 13 || event.keyCode == 13) {
            BuscarArreglo('Nombre',$(this).val())
        }
        
    })
    $('input[name=arreglo_clasficacion]').change(function () {
        window.history.replaceState(null, null, window.location.pathname);
        BuscarArreglo($(this).attr('data-tipo'),$(this).val());
        
    })
    BuscarArreglo('General','');
    function BuscarArreglo(tipo_filtro,Valor) {
        $('.row-list-arreglos').html('<div class="col-md-12" >'+
                                            '<center>'+
                                                '<br><br><br><br><br>'+
                                                '<i class="fa fa-spinner fa-pulse fa-3x" style="color: #88C425 !important"></i><br>'+
                                                '<h4>Buscando arreglos, espero por favor...</h4>'+
                                            '</center>'+
                                        '</div>');
        $.ajax({
            url: "controlador/AjaxArreglos.php",
            type: 'POST',
            dataType: 'json',
            data:{
                tipo_filtro:tipo_filtro,
                Valor:Valor,
                accion:'BUSCAR_ARREGLOS'
            },beforeSend: function (xhr) {
            },success: function (data, textStatus, jqXHR) {
                //$('.row-list-arreglos').html(data.arreglos);
                $('.row-list-arreglos').html(data.arreglos).paginate({
                    perPage:                3,      
                    autoScroll:             true,       
                    paginatePosition:       ['bottom'] 
                }).trigger('paginate');
            },error: function (e) {
                console.log(e);
            }
        })
    }
    $('.col-filtro').css({
        height:$('.col-content').height()+'px'
    })

    
})
