<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);

    if(isset($_POST['delete_button']))
    {

        $id=$_POST['delete_query'];
        $delete="delete from menu where p_id= '$id' ";
        $result=mysqli_query($conn,$delete);
        
        header("location:Mycart.php");
    }
    
    
    
    ?>
 
    