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
          <div class="aside ">

            <ul>
              <li><a href="admin.php" class="active">Dashboard</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="customer.php">Customers</a></li>
              <li><a href="food.php">foods</a></li>
              <li><a href="order.php">Orders</a></li><br><br>
              <li><a href="report.php">Report</a></li><br><br>
              <li><a href="Logout.php"> <i id="close" class="bi bi-box-arrow-left">Logout</i></a> </li>
              
            </ul>

          </div>
         
      </ol>
    </nav>

    <!-- =======side bar end====== -->

  </div>


  <div class="container">  
                <p>Customers</p>
                <style>
                    p{
                      text-align:center;
                        padding: 30px;
                        margin-top:50px;
                        font-size: 40px;
                    }

                    .card{
                      margin-left:110px;
             

                    }
                </style>
                                  
<div class="card">
 <div class="card-body">
     <table class="table table-bordered table-striped">
        <thead>
            <tr class="bg-primary">
            <th>Name</th>
            <th>e-mail</th>
            <th>address</th>  
            </tr>
        </thead>
<tbody>
<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="select * from login limit=10";


$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    
    echo"<tr>";
    echo "<td>".$row['Name'].$row['surname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['address']."</td>";
    
    echo "</tr>";

  }
echo"</center>"; 
echo"</table>";


session_start();
if($_SESSION['uname'])
{
    echo '';
}
else{
   header("location:login_form.php");
}

?>
</tbody>
</div>
</div>
</div>

  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>
