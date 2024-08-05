<?php
session_start();
                    if($_SESSION['uname'])
                    {
                   
                    }
                    else{
                        header("location:login_form.php");
                    }
                   
    include("dbconnect.php");

   
        $id=$_SESSION['uname'];
        $delete="delete from menu where userid='$id' ";
        $result=mysqli_query($conn,$delete);
        $delete2="delete from userorders where userid='$id' ";
        $result2=mysqli_query($conn,$delete2);
        
        header("location:order-status-show.php");
   
    
    
    
    ?>
 
    