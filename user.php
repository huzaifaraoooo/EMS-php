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
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="border: solid">
                <h1>Register Form</h1>
                <form method="post">
                    <div>
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="re">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['re'])){  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $qry="INSERT INTO user(name,email,password) VALUE ('$name','$email','$password')";
    $result=mysqli_query($conn,$qry);
    
    if($result){
        header("location:signin.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($conn);
?>