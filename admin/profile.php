<?php
session_start();
$id=$_SESSION['uname'];

include 'config.php';
?>


<html>
<head>   
   <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="admin.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body> 
<style>
  body{
    background-color:#eee!important;
   }
   
</style>
<?php
  include("navbar.php");
  ?>

<style>
   .profile{
      margin-top:-90px;
      margin-left:170px;
   }
</style>

            
<div class="container">    
   <div class="profile">
      <?php
      error_reporting(0);
         $select = mysqli_query($conn, "SELECT * FROM `login` where userid='$id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }
      ?>
      <h3><?php echo $id; ?></h3>
      <h3><i class="bi bi-envelope-fill">  &nbsp&nbsp<?php echo $fetch['email']; ?></h3></i>
      <h3><i class="bi bi-telephone-fill">&nbsp&nbsp<?php echo $fetch['phone_no']; ?></i></h3>
      <a href="update_profile.php" class="btn btn-primary">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
   </div>

</div>
</div>
</body>
</html>