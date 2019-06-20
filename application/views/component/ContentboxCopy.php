<?php
#this is to contain the requriments and donations records in the list
#this is like full length div that will fit the content inside

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../lib/bootstrap.min.css">
    <script src="../../../lib/jquery-3.4.1.min.js"></script>
    <script src="../../../lib/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php $this->load->view('component/RequirementModal',$userdata);?>
<!-- RECIEVES ARRAY OF DATA OF THE REQUIREMENT LIST AT THE AT load->view() -->
    <div class="container content-box">
            <div class="row content-box-title " >
                <h5><?=$userdata['title']?></h5>
            </div>
            <div class="row content-box-body">
                <p><?=$userdata['description']?></p>
            </div>
            <input type="text" class="hidden-json" value='<?php echo json_encode($userdata,JSON_PRETTY_PRINT)?>'>
    </div>
    <script>        
        $(document).ready(function () { 
            $(".content-box").click(function(e){
                var data = JSON.parse($(this).find('.hidden-json').first().val());
                $('#modal-form').modal('show');
                $('#modal-form').on('shown.bs.modal', function (e) {
                    
                });
            });
        });
    </script>
</body>
</html>