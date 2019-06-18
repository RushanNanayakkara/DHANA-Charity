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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="modal-form">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1>Title</h1>
                            </div>
                            <div class="modal-body">
                                This is the body
                            </div>
                            <div class="modal-footer">
                                Footer
                                <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close">
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" data-toggle="modal" data-target="#modal-form">Open</a>
            </div>
        </div>
    </div>
    <script src="../../../lib/jquery-3.4.1.min.js"></script>
    <script src="../../../lib/bootstrap.min.js"></script>
</body>
</html>