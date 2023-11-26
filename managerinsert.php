<?php
include('config.php');
if(isset($_POST['sub']))
{
    $user=$_POST['userName'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $city=$_POST['city'];
    $phoneNumber=$_POST['phoneNumber'];
    $salary=$_POST['salary'];

    $qry="INSERT INTO manager(userName, email, cnic, city, phoneNumber, salary) VALUES ('$user','$email','$cnic','$city','$phoneNumber','$salary')";

    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
        header("location: managerview.php");
        
    }
    else{
       echo "error";
    }
 
    mysqli_close($conn);

}
?>