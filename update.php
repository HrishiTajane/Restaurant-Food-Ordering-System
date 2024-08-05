<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container">


<style>
    .container{

        margin-top:60px;    
    }
    .move_to_foods{
        text-align:right;
    }

</style>

<script>
    function alertbox(){
        alert("food-item updated");
    }


</script>


<?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="hrishi";
       
        $conn=mysqli_connect($servername,$username,$password,$database);
        
        $sql="select * from foods";
        $result=mysqli_query($conn,$sql);

        if(isset($_POST['update_button']))
        {
            $name=$_POST['update_name'];
            $details1=$_POST['update_details'];
            $type1=$_POST['update_type'];
            $price1=$_POST['update_price'];
            
            

        }


?>

    <div class="row justify-content-md-center">
        <div class="col col-lg-6">

            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h2>update food</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group "> <label for=""> update dish name:</label>
                            <input type="text" class="form-control" value="<?php echo $name?>" name="dish_name" placeholder="Enter dish name"
                            required>
                        </div>
                        <div class="form-group "> <label for="">update dish details:</label>
                            <input type="text" class="form-control" value="<?php echo "$details1";?>" name="dish_details" placeholder="Enter dish destails"
                                required>
                        </div>
                        <div class="center">
                        
                        <label for="">update Price:</label>
                        <input type="text" class="form-control" value="<?php echo $price1;?>" name="price" placeholder="Enter dish price"
                                required>       
                        <div>
                            <select name="dish_type1" value="<?php echo $type;?>">
                                <option>Veg</option>
                                <option>Non-veg</option>
                            </select>
                        </div><br>
                        <div>
                            <div class="form-group ">   
                            <label for="">update photo:</label>
                                <input type="file" name="upload_photo" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <input type="submit" id="submit" onclick="alertbox()" value="update" class="btn btn-primary w-25">
                        <div class="move_to_foods" >
                            <a href="food.php"> <input type="button" id="move_to_foods" value="go to foods" class="btn btn-success w-25"></a>
                        </div>
                    </form>
                </div>
            </div>
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

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $dish_name=$_POST['dish_name'];
    $dish_details=$_POST['dish_details'];
    $price=$_POST['price'];
    $dish_type=$_POST['dish_type'];
    $image=$_POST['upload_photo'];
 


$sql="update foods set dish_name='$dish_name',dish_details='$dish_details',price='$price' where dish_details='$details1'";   
$result=mysqli_query($conn,$sql);

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
   
    
</body>
</html>