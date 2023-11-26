<?php
   include("config.php");
   $id= $_GET['id'];

   $qry ="DELETE FROM bod WHERE id ='$id'";
   $result=mysqli_query($conn,$qry);
   if($result)
   {
    header("location: bodview.php");
   }
   else{
    echo "error";
   }
   mysqli_close($conn);
   
?>