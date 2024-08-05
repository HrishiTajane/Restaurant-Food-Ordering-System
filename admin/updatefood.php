<?php
include("dbconnect.php");

    $id=$_REQUEST['id'];
    $dish_name=$_REQUEST['dish_name'];
    $dish_details=$_REQUEST['dish_details'];
    $price=$_REQUEST['price'];
    $dish_type=$_REQUEST['dish_type'];

$sql="update foods set dish_name='$dish_name',dish_details='$dish_details',price='$price',dish_type='$dish_type' where p_id='$id'";   
$result=mysqli_query($conn,$sql);

if(!$result)
{
  die("sorry data not added".mysqli_connect_error());
}
else
{
 echo"data added<br>";
}

header("Location:food.php");

     
  

    ?>