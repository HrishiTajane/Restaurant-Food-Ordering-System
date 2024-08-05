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




    <div class="row justify-content-md-center">
        <div class="col col-lg-6">

            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h2>update food</h2>
                </div>
                <div class="card-body">
                    <form action="updatefood.php" method="POST" enctype="multipart/form-data">
                    <?php
                        include("dbconnect.php");
                        $id=$_REQUEST['id'];
                        $sql="select * from foods where p_id='$id'";
                        $result=mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_array($result))
                        {

                    ?>
                        <input type="hidden" value="<?php echo $row['p_id']; ?>" name="id">
                        <div class="form-group "> <label for=""> update dish name:</label>
                            <input type="text" class="form-control" value="<?php echo $row['dish_name'];?>" name="dish_name" placeholder="Enter dish name"
                            required>
                        </div>
                        <div class="form-group "> <label for="">update dish details:</label>
                            <input type="text" class="form-control" value="<?php echo $row['dish_details'];?>" name="dish_details" placeholder="Enter dish destails"
                                required>
                        </div>
                        <div class="center">
                        
                        <label for="">update Price:</label>
                        <input type="text" class="form-control" value="<?php echo $row['price'];?>" name="price" placeholder="Enter dish price"
                                required>       
                        <div>
                            <select name="dish_type">
                                <option value="Veg">Veg</option>
                                <option value="Non-veg">Non-veg</option>
                            </select>
                        </div><br>
                        <div>
                            <div class="form-group ">   
                            <label for="">update photo:</label>
                                <input type="file" name="image" accept=".jpg, .jpeg, .png" required>
                            </div>
                        </div>
                        <input type="submit" id="submit" onclick="alertbox()" value="update" class="btn btn-primary w-25">
                        <div class="move_to_foods" >
                            <a href="food.php"> <input type="button" id="move_to_foods" value="go to foods" class="btn btn-success w-25"></a>
                        </div>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


   
    
</body>
</html>