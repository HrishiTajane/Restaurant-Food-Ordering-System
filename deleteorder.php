<?php
session_start();
                    if($_SESSION['uname'])
                    {
                  
                        
                    }
                    else{
                        header("location:login_form.php");
                    }
                   
$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);

    if(isset($_POST['delete_button']))
    {

        $id=$_SESSION['uname'];
        $delete="delete from menu where userid='$id' ";
        $result=mysqli_query($conn,$delete);
        $delete2="delete from userorders where userid='$id' ";
        $result2=mysqli_query($conn,$delete2);
        
        header("location:userorder.php");
    }
    
    
    
    ?>
 
    