$(document).ready(function () { 
    $(".content-box").click(function(e){
        var data = JSON.parse($(this).find('.hidden-json').first().val());
        $('#modal-form').modal('show');
        $('#modal-form').on('shown.bs.modal', function (e) {
            $('#modal-title').html(data['Title']);
            $('#req-form-DNEID').val(data['DNEID']);
            $('#req-form-reqID').val(data['ReqID']);
            $('#req-form-title').val(data['Title']);
            $('#req-form-category').val(data['Category']);
            $('#req-form-reqDate').val(data['Deadline']);
            $('#req-form-donated').val(data['Donated_Amount']);
            $('#req-form-description').html(data['Description']);
        });
    });
});