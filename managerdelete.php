<?php
   include("config.php");
   $id= $_GET['id'];

   $qry ="DELETE FROM manager WHERE id ='$id'";
   $result=mysqli_query($conn,$qry);
   if($result)
   {
    header("location: managerview.php");
   }
   else{
    echo "error";
   }
   mysqli_close($conn);
   
?>