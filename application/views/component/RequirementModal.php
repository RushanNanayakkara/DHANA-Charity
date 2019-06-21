<?php
#this is a popup box to display a title some sent destails
#the buttons has to be included to close the popup and the to update the content
#to update the content the controller has to be chosen according to the account type
?>

<div class="modal fade" id="modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 id="modal-title"></h1>
            </div>

            <!-- WARNINGS -->
            <div id="alert-success" class="alert alert-success" style="display:none"></div>
            <div id="alert-fail" class="alert alert-danger" style="display:none"></div>
            <div class="modal-body">
                <?php
                    $this->load->view('forms/requirement-form');
                ?>
            </div>

            <div class="modal-footer pull-right">
                    <input id="btn-modal-save" type="button" class="btn btn-success col-2 "  value="Save">
                    <input id="btn-modal-delete" type="button" class="btn btn-danger col-2 "  value="Delete">
                    <input id="btn-modal-cancel" type="button" class="btn btn-primary col-2 " data-dismiss="modal" value="Cancel">
            </div>
            
            <script>
                $(document).ready(function () {
                    
                    function clearForm(){
                        $('#modal-title').html("");
                        $('#req-form-DNEID').val("");
                        $('#req-form-reqID').val("");
                        $('#req-form-title').val("");
                        $('#req-form-category').val("");
                        $('#req-form-reqDate').val("");
                        $('#req-form-donated').val("");
                        $('#req-form-description').html("");
                    }

                    // function updateStoredData(){
                    //     var data = {}; 
                    //     data['DNEID']] = $('#req-form-DNEID').val();
                    //     data['ReqID'] = $('#req-form-reqID').val();
                    //     data['Category'] = $('#req-form-category').val();
                    //     data['Deadline'] = $('#req-form-reqDate').val();
                    //     data['Donated_Amount'] = $('#req-form-donated').val();
                    //     data['Title'] = $('#req-form-title').val();
                    //     data['Description'] = $('#req-form-description').val();

                        
                    // }

                    $('#btn-modal-save').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_RequirementForm/updateRequirement',
                            data:{
                                'DNEID':$('#req-form-DNEID').val(),
                                'ReqID':$('#req-form-reqID').val(),
                                'Category':$('#req-form-category').val(),
                                'Deadline':$('#req-form-reqDate').val(),
                                'Donated_Amount':$('#req-form-donated').val(),
                                'Title':$('#req-form-title').val(),
                                'Description':$('#req-form-description').val()
                            },
                            success: function(msg){
                                if(msg>0){
                                    $("#alert-success").text("Update successful")
                                    $("#alert-success").show()
                                    $("#alert-fail").hide()
                                }else{
                                    $("#alert-fail").text("Update unsuccessful")
                                    $("#alert-success").hide()
                                    $("#alert-fail").show()
                                }
                            }
                        });
                    });

                    $('#btn-modal-delete').click(function(e){
                        $.ajax({
                            type:'POST',
                            url:'<?=base_url()?>CTRL_RequirementForm/deleteRequirement',
                            data:{
                                'ReqID':$('#req-form-reqID').val()
                            },
                            success: function(msg){
                                alert(msg);
                                if(msg>0){
                                    $("#alert-success").text("Deleted successful")
                                    $("#alert-success").show()
                                    $("#alert-fail").hide()
                                    clearForm();
                                }else{
                                    $("#alert-fail").text("Deletion unsuccessful")
                                    $("#alert-success").hide()
                                    $("#alert-fail").show()
                                }
                            }
                        });
                    });

                    $('#modal-form').on('hidden.bs.modal',function(){
                        $("#alert-success").hide()
                        $("#alert-fail").hide()
                        clearForm();
                    });

                });

                
            </script>

        </div>
    </div>
</div>