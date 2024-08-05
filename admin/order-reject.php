<?php

include("dbconnect.php");

        $id=$_REQUEST['id'];
        $delete="delete from menu where id='$id'";
        $result=mysqli_query($conn,$delete);
        $delete2="delete from userorders where userid='$id' ";
        $result2=mysqli_query($conn,$delete2);
        
        header("location:order.php");
   

?>