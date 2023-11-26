<?php
include('config.php');
if(isset($_POST['sub']))
{
    $user=$_POST['username'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $city=$_POST['city'];
    $phoneNumber=$_POST['phoneNumber'];
    $password=$_POST['pass'];

    $qry="INSERT INTO employee(userName, email, cnic, city, phoneNumber, password) VALUES ('$user','$email','$cnic','$city','$phoneNumber','$password')";

    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
        header("location: view.php");
        
    }
    else{
        echo " $user";
        echo " $email";
        echo " $cnic";
        echo " $city";
        echo " $phoneNumber";
        echo " $password";
    }
 
    mysqli_close($conn);

}
?>