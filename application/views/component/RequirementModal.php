<?php
#this is a popup box to display a title some sent destails
#the buttons has to be included to close the popup and the to update the content
#to update the content the controller has to be chosen according to the account type
?>

<div class="modal fade" id="requirement-modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 id="req-modal-title"></h1>
            </div>

            <!-- WARNINGS -->
            <div id="req-modal-alert-success" class="alert alert-success" style="display:none"></div>
            <div id="req-modal-alert-fail" class="alert alert-danger" style="display:none"></div>
            <div class="modal-body">
                <?php
                    $this->load->view('forms/requirement-form');
                ?>
            </div>

            <div class="modal-footer pull-right">
                    <input id="req-modal-btn-approve" type="button" class="btn btn-dark col-2 "  value="Approve">
                    <input id="req-modal-btn-decline" type="button" class="btn btn-danger col-2 "  value="Decline">
                    <input id="req-modal-btn-cancel" type="button" class="btn btn-primary col-2 " data-dismiss="modal" value="Cancel">
            </div>
            
            <script>
                $(document).ready(function () {
                    
                    function clearForm(){
                        $('#req-modal-title').html("");
                        $('#req-form-DNEID').val("");
                        $('#req-form-reqID').val("");
                        $('#req-form-title').val("");
                        $('#req-form-category').val("");
                        $('#req-form-reqDate').val("");
                        $('#req-form-required').val("");
                        $('#req-form-donated').val("");
                        $('#req-form-description').html("");
                        $('#req-form-status').html("");
                        $('#req-form-status').removeClass('badge-warning badge-success badge-danger');
                    }

                    $('#req-modal-btn-approve').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_RequirementForm/updateRequirement',
                            data:{
                                'DNEID':$('#req-form-DNEID').val(),
                                'ReqID':$('#req-form-reqID').val(),
                                'Category':$('#req-form-category').val(),
                                'ReqDate':$('#req-form-reqDate').val(),
                                'Required_Amount':$('#req-form-required').val(),
                                'DonatedAmount':$('#req-form-donated').val(),
                                'Title':$('#req-form-title').val(),
                                'Description':$('#req-form-description').val(),
                                'ReqState':'APPROVED'
                            },
                            success: function(msg){
                                if(msg>0){
                                    $("#alert-success").text("Request Accepted!")
                                    $("#alert-success").show()
                                    $("#alert-fail").hide()
                                    $('#req-form-status').html("APPROVED");
                                    $('#req-form-status').removeClass('badge-danger badge-warning');
                                    $('#req-form-status').addClass('badge-success');
                                }else{
                                    $("#alert-fail").text("Update unsuccessful")
                                    $("#alert-success").hide()
                                    $("#alert-fail").show()
                                }
                            }
                        });
                    });

                    
                    $('#btn-modal-decline').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_RequirementForm/updateRequirement',
                            data:{
                                'DNEID':$('#req-form-DNEID').val(),
                                'ReqID':$('#req-form-reqID').val(),
                                'Category':$('#req-form-category').val(),
                                'ReqDate':$('#req-form-reqDate').val(),
                                'Required_Amount':$('#req-form-required').val(),
                                'DonatedAmount':$('#req-form-donated').val(),
                                'Title':$('#req-form-title').val(),
                                'Description':$('#req-form-description').val(),
                                'ReqState':'REJECTED'
                            },
                            success: function(msg){
                                if(msg>0){
                                    $("#alert-success").text("Request Rejected!")
                                    $("#alert-success").show()
                                    $("#alert-fail").hide()
                                    $('#req-form-status').html("REJECTED");
                                    $('#req-form-status').removeClass('badge-warning badge-success');
                                    $('#req-form-status').addClass('badge-danger');
                                }else{
                                    $("#alert-fail").text("Update unsuccessful")
                                    $("#alert-success").hide()
                                    $("#alert-fail").show()
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

                    $('#requirement-modal-form').on('hidden.bs.modal',function(){
                        $("#alert-success").hide()
                        $("#alert-fail").hide()
                        clearForm();
                    });

                });

            </script>

        </div>
    </div>
</div>