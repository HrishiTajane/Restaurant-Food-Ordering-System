
<html>
<head>
  <title>Report</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
  <style>
    body{
      background-color: rgb(221, 234, 242);
  }
  </style>


<?php
  include("navbar.php");
  error_reporting(0);
  ?>
<div id="main">



<div class="container">  
                <p class="heading-name">Report</p>
                <style>
                  #main{
                    margin-left:110px;

                  }
                    p{
                      text-align:center;
                        padding: 20px;
                        font-size: 40px;
                    }
                    .heading-name{
                      margin-top:-30px;
                    }

                    .card{
                      margin-left:270px;
                      margin-right:200px;
             

                    }

                    tr:hover{
                      background-color:#f9fc70;
                    }
                </style>
                                  
<div class="card">
 <div class="card-body">
     <table class="table table-bordered table-striped">
        <thead>
            <tr class="bg-primary">
            <th>Total Customers</th>
            <th> Total Foods dish</th>
            <th> Total Orders</th>
            <th>Total Food Sale</th>  
            </tr>
        </thead>
<tbody>
<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['submit']))

$id= $_POST['update1'];
$sql="select Total from userorders where status='completed'";

$result=mysqli_query($conn,$sql);
if(mysqli_fetch_array($result)>0)

$total=0;
mysqli_data_seek($result,0);
while($row=mysqli_fetch_assoc($result))
{

$total=$total+$row['Total'];

}




$sql='select * from login';
$result=mysqli_query($conn,$sql);
$x=mysqli_num_rows($result);

$sql="select * from foods";
$result=mysqli_query($conn,$sql);
$y=mysqli_num_rows($result);

$sql="select * from userorders";
$result=mysqli_query($conn,$sql);
$z=mysqli_num_rows($result);

{
    
    echo"<tr>";
    echo"<th width=20%> $x</th>";
    echo"<th width=20%> $y</th>";
    echo"<th width=20%> $z</th>";
    echo"<th width=20% style='color:green;'> &#8377;$total</th>";
   
    echo "</tr>";

  }
echo"</center>"; 



?>
</tbody>
</table>
</div>
</div>
</div>
<br>
<hr>



<div class="container">  
                <!-- <p>customer</p> -->
                <style>
                    p{
                      text-align:center;
                        padding: 0px;
                        margin-top:0px;
                        font-size: 40px;
                    }
                    hr{
                      margin-left:90px;
                    }

                    #card{
                      margin-left:160px;
                      margin-right:90px;
             

                    }
                </style>
                                  
<div class="card" id="card">
  <div class="card-header"><h3 class="p-2">Completed Orders</h3></div>
 <div class="card-body">
     <table class="table table-bordered table-striped">
        <thead>
            <tr style="background-color: rgb(12, 189, 216);">
            <th> Customers</th>
            <th> Email</th>
            <th>  Phone no</th>
     
            <th>Bill</th>  
            </tr>
        </thead>
<tbody>
  
<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);
session_start();
$sql="select * from userorders where status='completed'";
error_reporting(0);

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
    echo"<th width=30%>".$row['Name'].$row['surname']."</th>";
    echo"<th width=30%>".$row['email']."</th>";
    echo"<th width=22%>".$row['mobileno']."</th>";

    echo"<th width=20% style='color:green;'>".$row['Total']."</th>";
   
    echo "</tr>";

  }
echo"</center>"; 

?>
</tbody>
</table>
</div>
</div>
</div>



</div>
    
</body>
</html>