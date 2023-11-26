<?php
include('config.php');

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $user=$_POST['username'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $city=$_POST['city'];
    $phoneNumber=$_POST['phoneNumber'];
    $password=$_POST['pass'];
    
    $qry="UPDATE employee SET userName='$user',email='$email',cnic='$cnic',city='$city',phoneNumber='$phoneNumber',password='$password' WHERE id='$id'";
    
    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
        header("Location:view.php");
    }
    else{
        echo " error";
    }
 
    mysqli_close($conn);

}
?>