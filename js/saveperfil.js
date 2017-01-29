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
})


