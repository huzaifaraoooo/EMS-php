<?php
include('config.php');

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $user=$_POST['userName'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $city=$_POST['city'];
    $phoneNumber=$_POST['phoneNumber'];
    $salary=$_POST['salary'];
    
    $qry="UPDATE bod SET userName='$user',email='$email',cnic='$cnic',city='$city',phoneNumber='$phoneNumber',salary='$salary' WHERE id='$id'";
    
    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
        header("Location:bodview.php");     
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