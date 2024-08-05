<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <title>Menu</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <script>
                function alertbox(){
                    alert("food-item added in Cart");
                }
        </script>       
        <style>
            :root {
    --bg-black-900: #f2f2fc;
    --bg-black-100: #fdf9ff;
}

.logo {
    display: flex;
    left: 40px;
    position: absolute;
}

.sidebarGo {
    transform: translate(-443px, 0px);
    position: absolute;
}

nav {
    background-color: rgb(10, 2, 2);
    position: fixed;
    top: 0px;
    margin: 0;
    padding: 0;
    width: 100%;
    display: flex;
    align-items: right;
    justify-content: center;
}

.ham {
    margin-top: 3px;
    margin-left: 10px;
    position: fixed;

}

.cross {
    margin-top: 15px;
    margin-left: 155px;
    position: fixed;
}

.hamberger {
    display: flex;
    position: absolute;
    cursor: pointer;
    top: 10px;
    left: 10px;
    display: none;
}

ul {
    list-style-type: none;
    padding: 5px;
    display: flex;
    margin-left:580px;

}

ul li a {
    text-decoration: none;
    font-size: 24px;
    display: block;
    border-radius: 5px;
    padding: 5px;
    float: left;
    color: white;
    padding: 5px 15px;
    letter-spacing: 1px;

}

ol {
    height: 40px;
}

li a:hover {

    color: rgb(18, 9, 9);
    transition: all 0.3s ease;
    background-color: white;

}

</style>
    </head>
    
    <body>
    
    <div class="container-fluid">

        <nav style="z-index: 5;">


            <ol>
                <div id="viewport" class="container-fluid">


                    <!-- ======side bar start======  -->
                    <div class="aside sidebarGo">


                        <ul>
                            <li><a href="Home.html">Home</a></li>
                            <li><a href="Menu.php">Menus</a></li>
                            <li><a href="Mycart.php">cart                 
                        
                         </a></li>
                            <li><a href="order-status-show.php">Order</a></li>
                            <li><a href="userorder.php">Bill</a></li>
                            <li><a href="profile.php"><i class="bi bi-person-circle"></i></a></li>
                            <!-- <li><a href="logout.php">logout</a></li> -->
                        </ul>

                    </div>
                    <div class="hamberger">

                        <img class="ham" src="C:\Users\OM\Pictures\hamburger.jpg" alt="" height="40px" width="40px">
                        <img class="cross" src="C:\Users\OM\Pictures\cross.png" alt="" height="20px" width="20px">
                    </div>
                </div>
            </ol>
        </nav>

        <!-- =======side bar end====== -->


        <!-- menu start -->

        

<div class="container-fluid" id="container" style="width:95%;">
<div class="container text-center">
    <style>
        
        .container{
            background-color: rgb(225, 239, 249);
            padding:50px;
            margin-top:-70px;
        }
    </style>
    <h2>Choose your favorate food</h2>

</div>
<?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";
$conn=mysqli_connect($servername,$username,$password,$database);

$id=$_SESSION['uname'];
$sql="select * from login where userid='$id'";
// $sql="select p_name from menu";

$result=mysqli_query($conn,$sql);
mysqli_data_seek($result,0);
while($row=mysqli_fetch_array($result))
{
    $name=$row['Name'].$row["surname"];
  }
//   echo$name;

error_reporting(0);

if($_SERVER["REQUEST_METHOD"]=="POST")
             {
                 
               $p_id=$_POST['p_id'];
               $p_name=$_POST['p_name'];
               $p_type=$_POST['p_type'];
               $p_price=$_POST['p_price'];
               $Quantity=$_POST['quantity'];
               $Total= $p_price* $Quantity;
               $userid=$_POST['uname'];
               $name=$_POST['name'];
               $image=$_POST['image'];
               
               

$sql="INSERT INTO `menu`(`p_id`,`p_name`,`p_type`,`p_price`,`Quantity`,`Total`,`userid`,`Name`,`image`) VALUES('$p_id','$p_name','$p_type','$p_price','$Quantity','$Total','$userid','$name','$image')";
$result=mysqli_query($conn,$sql);

if(!$result)
{
  die("sorry data not added".mysqli_connect_error());
}
else
{
//  echo"data added<br>";
}

header("Location:Mycart.php");

}
$sql = "SELECT * FROM foods WHERE p_id";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">
    <style>
              #container{
            margin-top:150px;
        }
        .row{
            padding-bottom:50px;
        }

        #image{
            border-radius:10px;
        }
        .mypanel{
            background-color: rgb(246, 247, 249);
            margin:20px;
            border-radius:8px;
        }
        #image{
            border-radius:18px;
            padding:8px;
        }
        </style>

<form method="post">
<div class="mypanel" align="center" >
<img src="uploaded_img/<?php echo $row['image'];?>" id="image" width="100%" height="200px">
<input type="hidden" value="<?php echo $row['image'] ?>"  name="image">
<h4 class="text-dark"><?php echo $row["dish_name"]; ?></h4>
<h5 class="text-info"><?php echo $row["dish_details"]; ?></h5>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="p_name" value="<?php echo $row["dish_name"]; ?>">
<input type="hidden" name="p_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">

<input type="hidden" name="details" value="<?php echo $row["dish_details"]; ?>">

<input type="submit" style="margin-top:5px;" class="btn btn-success" onclick="alertbox()" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>

      <style>
       #h1{
        margin-top:250px;
       }
      </style>
        <label style="margin-left: 5px;color: red;">
        <h1 id="h1">Oops! No food is available.<p> Stay Hungry...! :</p></h1> </label>
      </center>
       
    </div>
  </div>

  <?php

}

?>

       </div>
       <script src="sidebar2.js"></script>
</body>

</html>