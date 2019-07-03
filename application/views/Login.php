<?php
#login form
#SHOULD BE CAPABLE OF
#logging in
#signing up
#forgot password management
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../lib/bootstrap.min.css">
    <style>
    *{
    box-sizing: border-box;
}

#content-row{
    height: 100vh;
    background-image: url('../../images/loginBackground.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

#form-box{
    width: 30vw;
    margin: auto;
    padding: 3vh;
    background: whitesmoke;
    -webkit-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.68);
    -moz-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.68);
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.68);
}


#form-box :not(a){
    margin-bottom: 2vh;
}

#form-box label{
    color: darkgray;
}

#login-btn{
    width: 10vw;
    padding: 1vh;
}

#signin-row{
    object-fit: contain;
}

#login-logo{
    width: 100%;
    height: 20vh;
    background-image: url("../../images/logo.png");
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
}
    
    </style>
    <title>Dhana Login</title>
</head>
<body class="container-fluid">
    <div class="row" id="content-row">
        <div class="border rounded" style="background-color: whitesmoke" id="form-box">
            <div id="login-logo"></div>
            <div class="display-3 text-center font-weight-bold">Dhaana</div>
            <form class="form-group">
                <label for="input-username" class="col-12">Username/Email</label>
                <input id="input-username" class="form-control col-12" type="text" name="username" placeholder="username / email">
                <label for="input-password col-12">Password</label>
                <input id="input-password" class="form-control col-12" type="password" name="password" placeholder="password">
                <button class="btn btn-primary col-sm-12 col-md-4" type="button" id="login-btn">Sign in</button>
                <a href="" class="d-block">Forgot password?</a>
                <a href="" class="d-block">Dont have an account?</a>
             </form>
        </div>
    </div>
</body>
</html>