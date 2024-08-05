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
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="admin_style.css">
  <title>Side Bar</title>
</head>

<body>
  
  <div class="container-main">

    <nav style="z-index: 5;">


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
         
        </div>
      </ol>
    </nav>

    <!-- =======side bar end====== -->
</div>

        <div class="container">


            <style>
                .container{
            
                    margin-left:90px;    
                    margin-top:60px;    
                }
            
            </style>

            <script>
                function alertbox(){
                    alert("food-item added");
                }


            </script>

         


                <div class="row justify-content-md-center">
                    <div class="col col-lg-6">

                        <div class="card">
                            <div class="card-header text-center bg-primary text-white">
                                <h2>Add food</h2>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group "> <label for="">dish name:</label>
                                        <input type="text" class="form-control" name="dish_name" placeholder="Enter dish name"
                                        required>
                                    </div>
                                    <div class="form-group "> <label for="">dish details:</label>
                                        <input type="text" class="form-control" name="dish_details" placeholder="Enter dish destails"
                                            required>
                                    
                                    </div>
                                    <div class="center">
                                    
                                    <label for="">Price:</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter dish price"
                                            required>       
                                    <div><br>
                                    <label for="">Select type:</label><br>
                                        <select name="dish_type">
                                            <option>Veg</option>
                                            <option>Non-veg</option>
                                        </select>
                                    </div><br>
                                    <div>
                                        <div class="form-group ">   
                                        <label for="">upload photo:</label>
                                        <input type="file" name="image" class="box" required accept=".jpg, .jpeg, .png">

                                        </div>
                                    </div>
                                    
                                    <input type="submit" name="submit" id="submit" value="add" class="btn btn-danger w-25">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
<div class="container">                                    
<div class="card">
 <div class="card-body">

     <table class="table table-bordered table-striped">
        <thead>
            <tr class="bg-primary">
            <th>image</th>
            <th>dish name</th>
            <th width="20%">dish details</td>
            <th>dish type</th>
            <th>dish price</th>
            <th>Action</th>      
            </tr>
        </thead>
        <tbody>
  
<?php
error_reporting(0);
                $servername="localhost";
                $username="root";
                $password="";
                $database="hrishi";
              
                
                $conn=mysqli_connect($servername,$username,$password,$database);
                
                $sql="select * from foods";
                $result=mysqli_query($conn,$sql);

                
                while($row=mysqli_fetch_array($result))
                {  
                    echo"<tr>";
                    echo "<td >".'<img src="uploaded_img/'.$row['image'].'" width="120px">'."</td>";
                    // echo "uploaded_img/".$row['image'];
                    echo "<td >".$row['dish_name']."</td>";
                    echo "<td >".$row['dish_details']."</td>";
                    echo "<td>".$row['dish_type']."</td>";
                    echo "<td >".$row['price']."  Rs</td>";

                
                    echo "<td colspan=3>";
                    echo"<form action='update.php' method='POST'>
                    <input type='submit' name='update_button' class='btn btn-info w-50' value='update'>
                    <input type='hidden' name='image' value=". $row['image'].">
                    <input type='hidden' name='update_name' value=". $row['dish_name'].">
                    <input type='hidden' name='update_details' value=". $row['dish_details'].">
                    <input type='hidden' name='update_type' value=". $row['dish_type'].">
                    <input type='hidden' name='update_price' value=". $row['dish_price']."></form>
                    <form action='admin_delete.php' method='POST'>
                    <input type='submit' name='delete_button' class='btn btn-danger w-50' value='Remove'>
                    <input type='hidden' name='delete_query' value=". $row['dish_name']."></td>";
                 
                    echo "</form>";
                    echo "</tr>";        
                }
                
                ?>


      </tbody> 
     </table>
    </div>
   </div> 
   </div>

    <?php
$servername="localhost";
$username="root";
$password="";
$database="hrishi";

$conn=mysqli_connect($servername,$username,$password,$database);
error_reporting(0);
if(isset($_POST['submit']))
           {
               if($_SERVER["REQUEST_METHOD"]=="POST")

                {
                 
                 $dish_name=$_POST['dish_name'];
                 $dish_details=$_POST['dish_details'];
                 $price=$_POST['price'];
                 $dish_type=$_POST['dish_type'];
                 $image=$_POST['image'];
                
                 
                $image = $_FILES['image']['name'];
                $image = filter_var($image, FILTER_SANITIZE_STRING);
                $image_size = $_FILES['image']['size'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_folder = 'uploaded_img/'.$image;


                $sql="INSERT INTO `foods`(`dish_name`,`dish_details`,`price`,`dish_type`,`image`) VALUES('$dish_name','$dish_details','$price','$dish_type','$image')";
                $result=mysqli_query($conn,$sql);




             if($result){
                if($image_size > 2000000){
                $message[] = 'image size is too large!';
                }else{
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
                }
                }
                }

                if(!$result)
                {
                die("sorry data not added".mysqli_connect_error());
                }
                else
                {
                echo"data added<br>";
                }

            }                 
            

                ?>
   
 
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>




