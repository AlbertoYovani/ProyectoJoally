$(document).ready(function (e) {
    $('input[name=arreglo_nombre]').keypress(function (event) {
        if (event.which === 13 || event.keyCode === 13) {
            BuscarArreglo('Nombre',$(this).val());
        }
        
    });
    $('input[name=arreglo_clasficacion]').change(function () {
       // window.history.replaceState(null, null, window.location.pathname);
    });
    
    $('.filtro_class').click(function (e) {
        e.preventDefault();
        location.href=$(this).attr('href');
    });
    $('.row-list-arreglos').paginate({
        perPage:                3,      
        autoScroll:             true,       
        paginatePosition:       ['bottom'] 
    });
    if($('input[name=totalarreglos]').val()<4){
        $('body .paginate-pagination').addClass('hide');
    }
});
