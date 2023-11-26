<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM user where id ='$id'";
$result=mysqli_query($conn,$qry);
if($result){
    header("location: userview.php");
}
else{
    echo "error";
}    
mysqli_close($conn);
?>