<?php
$conn=mysqli_connect('localhost','root','','ems');
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}     
?>