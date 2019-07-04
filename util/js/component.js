$(document).ready(function () { 
    $(".requirement-content-box").click(function(e){
            
            var data = JSON.parse($(this).find('.hidden-json').first().html());
            
            $('#requirement-modal-form').modal('show');
            $('#requirement-modal-form').on('shown.bs.modal', function (e) {
                $('#req-modal-title').html(data['Title']);
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
    
    $(".donation-content-box").click(function(e){
        var data = JSON.parse($(this).find('.hidden-json').first().html());
        
        $('#donation-modal-form').modal('show');
        console.log("came here")
        $('#donation-modal-form').on('shown.bs.modal', function (e) {
            $('#donation-modal-title').html(data['Title']);
            $('#donation-form-donationID').val(data['DonationID']);
            $('#donation-form-DNRID').val(data['DNRID']);
            $('#donation-form-reqID').val(data['ReqID']);
            $('#donation-form-title').val(data['Title']);
            $('#donation-form-donated').val(data['DonatedAmount']);
            $('#donation-form-date').val(data['Date']);
            $('#donation-form-note').html(data['Note']);
            if(data['DonationState']=='3'){
                $('#donation-form-state').html('COMPLETED');
                $('#donation-form-state').removeClass('badge-danger badge-warning badge-primary');
                $('#donation-form-state').addClass('badge-success');
            }else if(data['DonationState']=='2'){
                $('#donation-form-state').html('APPROVED');
                $('#donation-form-state').removeClass('badge-danger badge-success badge-warning');
                $('#donation-form-state').addClass('badge-primary');
            }else if(data['DonationState']=='1'){
                $('#donation-form-state').html('PROCESSING');
                $('#donation-form-state').removeClass('badge-danger badge-success badge-primary');
                $('#donation-form-state').addClass('badge-warning');
            }else if(data['DonationState']=='0'){
                $('#donation-form-state').html('REJECTED');
                $('#donation-form-state').removeClass('badge-warning badge-success badge-primary');
                $('#donation-form-state').addClass('badge-danger');
            }
        });
});
});