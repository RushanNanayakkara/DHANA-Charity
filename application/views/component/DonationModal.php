<?php
#this is a popup box to display a title some sent destails
#the buttons has to be included to close the popup and the to update the content
#to update the content the controller has to be chosen according to the account type
?>

<div class="modal fade" id="donation-modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 id="donation-modal-title"></h1>
            </div>

            <!-- WARNINGS -->
            <div id="donation-modal-alert-success" class="alert alert-success" style="display:none"></div>
            <div id="donation-modal-alert-fail" class="alert alert-danger" style="display:none"></div>
            <div class="modal-body">
                <?php
                    $this->load->view('forms/donation-form');
                ?>
            </div>

            <div class="modal-footer pull-right">
                    <input id="donation-modal-btn-approve" type="button" class="btn btn-dark col-2 "  value="Approve">
                    <input id="donation-modal-btn-decline" type="button" class="btn btn-danger col-2 "  value="Decline">
                    <input id="donation-modal-btn-cancel" type="button" class="btn btn-primary col-2 " data-dismiss="modal" value="Cancel">
            </div>
            <script>
                $(document).ready(function () {
                    
                    function clearForm(){
                        $('#donation-modal-title').html("");
                        $('#donation-form-donationID').val("");
                        $('#donation-form-DNRID').val("");
                        $('#donation-form-reqID').val("");
                        $('#donation-form-title').val("");
                        $('#donation-form-donated').val("");
                        $('#donation-form-date').val("");
                        $('#donation-form-note').html("");
                        $('#donation-form-state').html("");
                        $('#donation-form-state').removeClass('badge-warning badge-success badge-danger');
                    }

                    $('#donation-modal-btn-approve').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_DonationForm/updateDonation',
                            data:{
                                'DonationID' : $('#donation-form-donationID').val(),
                                'DNRID':$('#donation-form-DNRID').val(),
                                'ReqID':$('#donation-form-reqID').val(),
                                'Title':$('#donation-form-title').val(),
                                'DonatedAmount':$('#donation-form-donated').val(),
                                'Date':$('#donation-form-date').val(),
                                'Note':$('#donation-form-note').html(),
                                'DonationState':'2'
                            },
                            success: function(msg){
                                if(msg>0){
                                    $("#donation-modal-alert-success").text("Donation Approved!")
                                    $("#donation-modal-alert-success").show()
                                    $("#donation-modal-alert-fail").hide()
                                    $('#donation-form-state').html("APPROVED");
                                    $('#donation-form-state').removeClass('badge-danger badge-warning');
                                    $('#donation-form-state').addClass('badge-success');
                                }else{
                                    $("#donation-modal-alert-fail").text("Update unsuccessful")
                                    $("#donation-modal-alert-success").hide()
                                    $("#donation-modal-alert-fail").show()
                                }
                            }
                        });
                    });

                    $('#donation-modal-btn-decline').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_DonationForm/updateDonation',
                            data:{
                                'DonationID' : $('#donation-form-donationID').val(),
                                'DNRID':$('#donation-form-DNRID').val(),
                                'ReqID':$('#donation-form-reqID').val(),
                                'Title':$('#donation-form-title').val(),
                                'DonatedAmount':$('#donation-form-donated').val(),
                                'Date':$('#donation-form-date').val(),
                                'Note':$('#donation-form-note').html(),
                                'DonationState':'0'
                            },
                            success: function(msg){
                                if(msg>0){
                                    $("#donation-modal-alert-success").text("Donation Rejected!")
                                    $("#donation-modal-alert-success").show()
                                    $("#donation-modal-alert-fail").hide()
                                    $('#donation-form-state').html("Rejected");
                                    $('#donation-form-state').removeClass('badge-success badge-warning');
                                    $('#donation-form-state').addClass('badge-danger');
                                }else{
                                    $("#donation-modal-alert-fail").text("Update unsuccessful")
                                    $("#donation-modal-alert-success").hide()
                                    $("#donation-modal-alert-fail").show()
                                }
                            }
                        });
                    });
                    
                    //REQUIREMENT_DELETE_FUNCTION
                    // $('#btn-modal-decline').click(function(e){
                    //     $.ajax({
                    //         type:'POST',
                    //         url:'<?php//base_url()?>CTRL_RequirementForm/deleteRequirement',
                    //         data:{
                    //             'ReqID':$('#req-form-reqID').val()
                    //         },
                    //         success: function(msg){
                    //             alert(msg);
                    //             if(msg>0){
                    //                 $("#alert-success").text("Deleted successful")
                    //                 $("#alert-success").show()
                    //                 $("#alert-fail").hide()
                    //                 clearForm();
                    //             }else{
                    //                 $("#alert-fail").text("Deletion unsuccessful")
                    //                 $("#alert-success").hide()
                    //                 $("#alert-fail").show()
                    //             }
                    //         }
                    //     });
                    // });

                    $('#donation-modal-form').on('hidden.bs.modal',function(){
                        $("#alert-success").hide()
                        $("#alert-fail").hide()
                        clearForm();
                    });

                });

                
            </script>

        </div>
    </div>
</div>