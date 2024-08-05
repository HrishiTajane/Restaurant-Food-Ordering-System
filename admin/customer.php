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

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="admin.css">
  <title>Customer</title>
  
  <style>
      p{
        text-align:center;
          font-size: 40px;
      }
      #searchbox{
        margin-left:650px;
        margin-bottom:50px;

      }

      .card{
        margin-left:260px;
        margin-right:40px;


      }
      tr:hover{
        background-color:#f9fc70;

      }
  </style>
</head>

<body>
  <?php
  include("navbar.php");
  ?>

  <div class="container-fluid">  
    <div class="card">
      <div class="card-header">
        <p>Customers</p>
      </div>

      <div class="card-body">
       <table class="table table-bordered table-striped">
        <thead>
            <tr class="bg-primary">
            <th>Name</th>
            <th>E-mail</th>
            <th>Address</th>  
            <th>Phone no.</th>  
            </tr>
        </thead>
<tbody>
<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);


$sql="select * from login";

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    
    echo"<tr>";
    echo "<td>".$row['Name'].$row['surname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['phone_no']."</td>";
    
    echo "</tr>";

  }


echo"</center>"; 
echo"</table>";


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
