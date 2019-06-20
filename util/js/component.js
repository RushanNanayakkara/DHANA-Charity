$(document).ready(function () { 
    $(".content-box").click(function(e){
        var data = JSON.parse($(this).find('.hidden-json').first().val());
        $('#modal-form').modal('show');
        $('#modal-form').on('shown.bs.modal', function (e) {
            
        });
    });
});