<?php
 session_start();
 if($_SESSION['uname'])
 {
     echo '';
 }
 else{
    header("location:login_form.php");
 }

?><!DOCTYPE html>
<html>

  <head>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <!-- <link rel="stylesheet" href="sidebar2.css"> -->
  <title>Side Bar</title>
</head>

<body>
<?php
  include("navbar.php");
  ?>
  


  <p>Dashboard</p>


<style>
    p{
      text-align:center;
        font-size: 60px;
        margin-top: 50px;
       
      }
  
   
</style>
<div class="container-fluid" id="menubar">


<div id="pizza">
                <div class="row">

                    <div class="card col-md-2" id="inner-card">                                               
                    <a href="customer.php"><h5 id="p1"> Customers list  <br>                                               
                    </div></a>

                    <div class="card col-md-2 " id="inner-card"> 
                    <a href="food.php"><h5 id="p1"> Manage food <br>   
                    </div></a>

                    <div class="card col-md-2" id="inner-card">                   
                    <a href="order.php"> <h5 id="p1">Orders  <br>   </form>
                    </div></a>

                    <div class="card col-md-2 bg-gradient " id="inner-card">                     
                    <a href="#"> <h5 id="p1">Orders  <br>                   
                    </div></a>
                  
                </div>
            </div>
            </div>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>