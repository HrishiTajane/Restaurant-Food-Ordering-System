
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



<html>
   <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="js/bootstrap.min.js"> -->
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   </head>
     <body>
    
     <div class="container-main">

<nav>


  <ol>
    <div id="viewport" class="container-fluid">


      <!-- ======side bar start======  -->
      <div class="aside">

        <ul>
          <li><a href="Admin.php" class="active">Dashboard</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="customer.php">Customers</a></li>
          <li><a href="food.php">foods</a></li>
          <li><a href="order-status-show.php">Orders</a></li><br><br>
          <li><a href="report.php">Report</a></li><br><br>
          <li><a href="Logout.php"> <i id="close" class="bi bi-box-arrow-left">Logout</i></a> </li>

          
        </ul>

      </div>
    
   
    </div>
  </ol>
</nav>

<!-- =======side bar end====== -->

</div>
      <style>
         .row{
            margin-top:100px;
            /* margin-left:10px; */
         }
      </style>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="hrishi";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 error_reporting(0);
 $id=$_SESSION['uname'];
 $sql="select * from userorders where userid='$id'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
  
   ?>
         <div class="row justify-content-md-center">
            <div class="col col-lg-5">
               <div class="card">
                  <div class="card-header">
                     <h2>ORDERS</h2>
                  </div>
                  <div class="card-body">
                     <div>
                                                   
                           <?php

                           {
                              echo "Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp". $row['Name']."<br>";
                              echo "E-mail  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp".$row['email']."<br>";
                              echo "Mobile no&nbsp:&nbsp&nbsp&nbsp&nbsp".$row['mobileno']."<br>";
                              echo "Address&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp".$row['address']."<br>";
                              echo "Pin code&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp".$row['pin']."<br>";
                              echo "Pay Method&nbsp:&nbsp&nbsp&nbsp".$row['pay_method']."<br>";
                              echo "Food name:&nbsp&nbsp&nbsp&nbsp&nbsp".$row['p_name']."<br>";
                              echo "Quantity&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['Quantity']."<br>";
                              echo "price&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp ".$row['p-price']."<br>";
                              echo "Total&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['Total']."<br>";
                              
                              echo "Status&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp".$row['status']."<br>";
                             
                           }
                                                         

                           ?>

                     </div>
                  </div>

               </div>

            </div>
         </div>
         <?php

                        }
                     }
                        ?>
      </div>
      <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>
</html>




<?php
   
?>

</div>