<?php
#this is to contain the requriments and donations records in the list
#this is like full length div that will fit the content inside

?>
<!-- RECIEVES ARRAY OF DATA OF THE REQUIREMENT LIST AT THE AT load->view() -->
<div class="container alert content-box" style="background-color:whitesmoke">
    <div class="row content-box-title">
        <h3><?=$userdata['title']?></h3>
    </div>
    <hr>
    <div class="row content-box-body">
        <p style="color:darkgray"><?=$userdata['description']?></p>
    </div>
    <input type="hidden" class="hidden-json" value='<?php echo json_encode($userdata,JSON_PRETTY_PRINT)?>'>
</div>