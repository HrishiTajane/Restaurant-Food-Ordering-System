<?php
 session_start();
 if($_SESSION['uname'])
 {
     echo '';
 }
 else{
    header("location:login_form.php");
 }

 include("dbconnect.php");

?>
<html>

<head>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <title>Side Bar</title>
</head>

<body>
<style>
   body{
    background-color: rgb(221, 234, 242);
} 

</style>

   <?php
  include("navbar.php");
  ?>


  <p>Dashboard</p>


<style>
    p{
      text-align:center;
        font-size: 45px;       
        margin-left: 100px;        
        font-family:'Courier New', Courier, monospace;
        font-weight:600;
        margin-bottom: 30px;
        margin-top:-40px;
      }
      a{
        text-decoration:none;
      }
      #h1{
        margin-top: 20px;
        text-align:center;
        color:white;
        
        
      }
      
      #p1{
          padding: 15px;
          color: aliceblue;
      }
      #p2{
        margin-top:100px;
        color: aliceblue; 
      }

      #menubar{
        margin-left: 100px;
        margin-top: 0px;
      }
      #inner-card{
        margin:20px;
      }
     #inner-card:hover{
      background-image:linear-gradient(blue,red);
      }

      .card:hover {
            background-color: #ff4d4d;
            color: white;
            box-shadow: 15px 15px 15px aqua;
        }
  
   
</style>
<div class="container-fluid" id="menubar">


<div id="pizza">

<div class="row">
  
<div class="card col-md-2" id="inner-card">                   
                    <a href="order.php"><h1 id="h1"><?php
                                   
                                    error_reporting(0);
                                    $sql="select * from userorders";
                                    $result=mysqli_query($conn,$sql);
                                    $x=mysqli_num_rows($result);
                                    echo $x;
                            ?></h1> <h5 id="p1">Orders  <br>  
                    </div></a>


  <div class="card col-md-2" id="inner-card">                                              
  <a href="order.php"><h1 id="h1"><?php
   
                  error_reporting(0);
                  $sql="select * from userorders where status='pending'";
                  $result=mysqli_query($conn,$sql);
                  $x=mysqli_num_rows($result);
                  echo $x;
          ?></h1><h5 id="p1"> Pending Order </h5> <br>
                                                  
  </div></a>
  
  <div class="card col-md-2" id="inner-card">                                              
  <a href="order.php"><h1 id="h1"><?php
   
                  error_reporting(0);
                  $sql="select * from userorders where status='completed'";
                  $result=mysqli_query($conn,$sql);
                  $x1=mysqli_num_rows($result);
                  echo $x1;
          ?></h1><h5 id="p1"> Completed Order </h5> <br>
                                                  
  </div></a>


</div>



                <div class="row">
                    <div class="card col-md-2" id="inner-card">                                                            
                    <a href="customer.php"><h1 id="h1"><?php
                                   
                                    error_reporting(0);
                                    $sql="select * from login";
                                    $result=mysqli_query($conn,$sql);
                                    $x=mysqli_num_rows($result);
                                    echo $x;
                            ?></h1><h5 id="p1"> Customers list </h5> <br>
                                                                    
                    </div></a>

                    <div class="card col-md-2 " id="inner-card"> 
                    <a href="food.php"><h1 id="h1"><?php
                                   
                                    error_reporting(0);
                                    $sql="select * from foods";
                                    $result=mysqli_query($conn,$sql);
                                    $x=mysqli_num_rows($result);
                                    echo $x;
                            ?></h1><h5 id="p1"> Menu(item) </h5><br>   
                    </div></a>

                    

                    <div class="card col-md-2" id="inner-card">                     
                    <a href="report.php"><h1 id="h1"><?php
                                   
                                   error_reporting(0);
                                   $sql="select * from userorders where status='rejected'";
                                   $result=mysqli_query($conn,$sql);
                                   $x=mysqli_num_rows($result);
                                   echo $x;
                           ?></h1><h5 id="p1">Rejected Order</h5>                 
                    </div></a> </form>
                  
                </div>
            </div>
            </div>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>