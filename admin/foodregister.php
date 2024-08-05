<?php
 
                include("dbconnect.php");
                 
                 $dish_name=$_REQUEST['dish_name'];
                 $dish_details=$_REQUEST['dish_details'];
                 $price=$_REQUEST['price'];
                 $dish_type=$_REQUEST['dish_type'];
                 $image=$_REQUEST['image'];
                
                 
                $image = $_FILES['image']['name'];
                $image = filter_var($image, FILTER_SANITIZE_STRING);
                $image_size = $_FILES['image']['size'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_folder = 'uploaded_img/'.$image;


                $sql="INSERT INTO `foods`(`dish_name`,`dish_details`,`price`,`dish_type`,`image`) VALUES('$dish_name','$dish_details','$price','$dish_type','$image')";
                $result=mysqli_query($conn,$sql);




             if($result){
                if($image_size > 2000000){
                $message[] = 'image size is too large!';
                }else{
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
                }
                }
              

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