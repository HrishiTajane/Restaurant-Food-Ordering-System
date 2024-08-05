<?php
session_start();
$id=$_SESSION['uname'];

include 'config.php';
?>


<html>
<head>
   
   <title>Profile</title>

   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sidebar2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    

</head>
<body>

<!-- <div class="container"> -->

        <style>
            ul{
                margin-left:580px;
            }
            nav{
                justify-content:center;
            }
            </style>
        <nav style="z-index: 5;">


            <ol>
                <div id="viewport" class="container-fluid">


                    <!-- ======side bar start======  -->
                    <div class="aside sidebarGo">

                        <ul>
                            <li><a href="Home.html" class="active">Home</a></li>
                            <li><a href="Menu.php">Menus</a></li>
                            <li><a href="Mycart.php">cart</a></li>
                            <li><a href="userorder.php">Order</a></li>
                            <li><a href="userorder.php">Bill</a></li>
                            <li><a href="profile.php"><i class="bi bi-person-circle"></i></a></li>
                        </ul>

                    </div>
                    
                </div>
            </ol>
        </nav>

        <!-- =======side bar end====== -->
        
            
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
      <h3><?php echo $fetch['Name']; echo $fetch['surname']; ?></h3>
      <h3><i class="bi bi-envelope-fill">  &nbsp&nbsp<?php echo $fetch['email']; ?></h3></i>
      <h3><i class="bi bi-telephone-fill">&nbsp&nbsp<?php echo "9561183395"; ?></i></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
      <!-- <p> <a href="logout.php">logout</a></p> -->
   </div>

</div>
</div>
</body>
</html>