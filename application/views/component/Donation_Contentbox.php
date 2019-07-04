<?php
#this is to contain the requriments and donations records in the list
#this is like full length div that will fit the content inside

?>
<!-- RECIEVES ARRAY OF DATA OF THE REQUIREMENT LIST AT THE AT load->view() -->
<head>
    <link href="/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">  
</head>

<body>
    <div class="container alert donation-content-box" style="background-color:whitesmoke">
        <div class="row content-box-title">
            <h5><?=$donation['Title']?></h5>
        </div>
        <hr>
        <div class="row content-box-body">
            <div style="color:darkgray" class="">
                <span class="glyphicon glyphicon-user col-1  pl-0"></span>
                <span class="oi oi-person pr-1"> </span>
                <span class="col-4  pl-0"><?=$donorName?></span>
                <span class="oi oi-dollar"></span>
                <span class="col-5  pl-0"><?=$donation['DonatedAmount']?></span>
            </div>
        </div>
        <div class="hidden-json" hidden><?php echo json_encode($donation,JSON_PRETTY_PRINT)?></div>
    </div>
</body>