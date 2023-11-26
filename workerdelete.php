<?php
   include("config.php");
   $id= $_GET['id'];

   $qry ="DELETE FROM worker WHERE id ='$id'";
   $result=mysqli_query($conn,$qry);
   if($result)
   {
    header("location: workerview.php");
   }
   else{
    echo "error";
   }
   mysqli_close($conn);
   
?>