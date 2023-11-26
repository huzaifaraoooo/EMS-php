<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style> 
        body {
      background-color: darkgray;
        } 

        
    </style>
</head>
<body>
    <div class="container-center">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" >
                <h1>SignIn Form</h1>
                <form method="post" class="" >
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark" name="sub">SignIn</button>
                       <a href="user.php" class="btn btn-dark ">Sing Up</a>                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

include ("config.php");

if(isset($_POST["sub"])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $qry="SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$qry);
    if($result){
        header("location:index.php");
    }else{
        echo "invalid email and password";
    }
}
?>