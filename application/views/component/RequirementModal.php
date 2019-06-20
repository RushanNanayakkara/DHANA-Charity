<?php
#this is a popup box to display a title some sent destails
#the buttons has to be included to close the popup and the to update the content
#to update the content the controller has to be chosen according to the account type
?>

<div class="modal fade" id="modal-form">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h1 id="title"><?=$userdata['title']?></h1>
            </div>

            <div class="modal-body">
                <?php
                    $this->load->view('forms/requirement-form',$userdata);
                ?>
            </div>

            <div class="modal-footer">
                Footer
                <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close">
            </div>

        </div>
    </div>
</div>