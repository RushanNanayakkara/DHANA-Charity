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
    <div class="container" style="width:50vw; height:60vh; overflow-y: scroll;">
        <?php 
            $this->load->view('component/RequirementModal');
            foreach($requirementList as $requirement){
                $this->load->view('component/Contentbox',array('requirement'=>$requirement));
            }
        ?>
    </div>

<script src="../../../util/js/component.js"></script>
</body>
</html>