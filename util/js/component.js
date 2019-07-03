$(document).ready(function () { 
    $(".content-box").click(function(e){
        var data = JSON.parse($(this).find('.hidden-json').first().html());
        
        $('#modal-form').modal('show');
        $('#modal-form').on('shown.bs.modal', function (e) {
            $('#modal-title').html(data['Title']);
            $('#req-form-DNEID').val(data['DNEID']);
            $('#req-form-reqID').val(data['ReqID']);
            $('#req-form-title').val(data['Title']);
            $('#req-form-category').val(data['Category']);
            $('#req-form-reqDate').val(data['ReqDate']);
            $('#req-form-required').val(data['Required_Amount']);
            $('#req-form-donated').val(data['DonatedAmount']);
            $('#req-form-description').html(data['Description']);
            $('#req-form-status').html(data['ReqState']);
            if(data['ReqState']=='APPROVED'){
                $('#req-form-status').removeClass('badge-danger badge-warning');
                $('#req-form-status').addClass('badge-success');
            }else if(data['ReqState']=='PROCESSING'){
                $('#req-form-status').removeClass('badge-danger badge-success');
                $('#req-form-status').addClass('badge-warning');
            }else{
                $('#req-form-status').removeClass('badge-warning badge-success');
                $('#req-form-status').addClass('badge-danger');
            }

        });
    });
});