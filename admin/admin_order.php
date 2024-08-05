<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">
  <title>Side Bar</title>
</head>

<body>
  
  <div class="container-main">

    <nav>


      <ol>
        <div id="viewport" class="container-fluid">


          <!-- ======side bar start======  -->
          <div class="aside sidebarGo">

            <ul>
              <li><a href="admin.php" class="active">Dashboard</a></li>
              <li><a href="customer.php">Customers</a></li>
              <li><a href="food.php">foods</a></li> 
              <li><a href="order.php">Orders</a></li><br><br>
              <li><a href="profile.php"> <i id="close" class="bi bi-box-arrow-left">Logout</i></a> </li>

              
            </ul>

          </div>
          <div class="hamberger">
            
            <i style="font-size:50px;" class="bi bi-house-gear-fill ham"> </i>
            <i style="font-size:30px;" id="close" class="bi bi-x-lg cross"></i>
          </div>
      
        </div>
      </ol>
    </nav>

    <!-- =======side bar end====== -->

  </div>


  <p>Orders</p>


<style>
    p{
      text-align:center;
        font-size: 70px;
        margin-top: 100px;
       
    }
   
</style>

<?php
 session_start();
 if($_SESSION['uname'])
 {
     echo '';
 }
 else{
    header("location:login_form.php");
 }

?>




  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>