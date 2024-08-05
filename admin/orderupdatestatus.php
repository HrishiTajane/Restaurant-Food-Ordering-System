<?php

include("dbconnect.php");

$id=$_REQUEST['id'];
$status=$_REQUEST['status'];

$sql="update userorders set status='$status' where id='$id'";
$result=mysqli_query($conn,$sql);
header("Location:order.php");
?>