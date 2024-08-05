<?php

include 'config.php';
session_start();
$id=$_SESSION['uname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>update profile</title>


   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `login` where userid='$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }

    
   ?>

   <form action="" method="POST" enctype="multipart/form-data">
      <?php
      error_reporting(0);
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }
        
         
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $id; ?>" class="box">
   
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>your phone no. :</span>
            <input type="text" name="update_phone" value="<?php echo $fetch['phone_no']; ?>" class="box">
           
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="profile.php" class="delete-btn">go back</a>
   </form>


      <?php
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
         $name=$_POST['update_name'];
         $email=$_POST['update_email'];
         $phone_no=$_POST['update_phone'];

         
         
         $sql="update login set username='$name',email='$email',phone_no='$phone_no' where userid='$id'";   
         $result=mysqli_query($conn,$sql);
         
      }
      ?>
  
</div>

</body>
</html>