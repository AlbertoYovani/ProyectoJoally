$(document).ready(function (){
    $('.html5imageupload').html5imageupload({
        onAfterProcessImage: function() {
                $('#filename').val($(this.element).data('name'));
        },
        onAfterCancel: function() {
                $('#filename').val('');
        }
    });

    $('#save').html5imageupload({
        onSave: function(data) {
                console.log(data);
        },

    });
    $('#nuevo_registro').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "controlador/NuevoCliente.php",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                console.log('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                console.log(data)
                if(data.accion=='1'){
                    alert('REGISTRO GUARDADO');
                }
            },error: function (e) {
                console.log(e);
            }
        })
    })
})


