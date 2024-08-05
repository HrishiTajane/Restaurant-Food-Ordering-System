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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="admin_style.css">
  <title>Side Bar</title>
</head>

<body>
  
<?php
  include("navbar.php");
  ?>
        <div class="container">


            <style>
                .container{
            
                    margin-left:120px;    
                    margin-top:30px;    
                }
                #button{
                    margin-left:170px;
                    text-align:center;  
                }
                #btn{
                    background-image: linear-gradient(120deg,blue,aqua);
                    padding:25px;
                    font-size:20px;
                    color:white;
                }

            
            </style>

            <script>
                function alertbox(){
                    alert("food-item added");
                }



            </script>
<div id="button">
    <button class="btn btn-succes" id="btn" data-target="#mymodel" data-toggle="modal">Add New Food</button>
</div>
                            <div class="modal" id="mymodel">
                              <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header bg-primary">
                                    <h1>Add New Food</h1>
                                    
                                 </div>
                                 <div class="modal-body">
                                 

                                

                <div class="row justify-content-md-center">
                    <div class="col col-lg-12">

                        <div class="card">                            
                            <div class="card-body">
                                <form action="foodregister.php" method="POST" enctype="multipart/form-data">
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
                                    
                                    <input type="submit" name="submit" id="submit" value="add" class="btn btn-success w-25">&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <button type="button" value="cancel" class="btn btn-danger" id="close-btn" data-dismiss="modal">cancel</button>
                                     <style>
                                       
                                     </style>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           
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
                    
                    ?><a href="update.php?id=<?php echo $row['p_id'];?>" name="update_button" class="btn btn-info w-50">Update</a><br><br>
                    <?php
                     echo "<form action='admin_delete.php' method='POST'>
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

    
   
 
  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>




