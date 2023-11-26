<?php
include("config.php");

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $qry="UPDATE user SET name='$name',email='$email',password='$password' WHERE id='$id'";
    $result=mysqli_query($conn,$qry);
    
    if($result){

        header("Location:userview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($conn);
?>