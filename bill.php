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
    
   
  <title>bill</title>
    <link rel="stylesheet" href="sidebar2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <script>
                function alertbox(){
                    alert("Your Order placed...");
                }
        </script>      
</head>
<body>
<div class="container-fluid">

    
<nav style="z-index: 5;">


    <ol>
        <div id="viewport" class="container-fluid">


      
            <div class="aside sidebarGo">
       <style>
        ul{
            margin-left:650px;
        }
        nav{
            justify-content:center;
        }
        </style>

                <ul>
                    <li><a href="Home.html" class="active">Home</a></li>
                    <li><a href="Menu.php">Menus</a></li>
                    <li><a href="Mycart.php">cart</a></li>
                    <li><a href="userorder.php">Order</a></li>
                    <li><a href="profile.php"><i class="bi bi-person-circle"></i></a></li>
                </ul>

            </div>
            <div class="hamberger">

                <img class="ham" src="C:\Users\OM\Pictures\hamburger.jpg" alt="" height="40px" width="40px">
                <img class="cross" src="C:\Users\OM\Pictures\cross.png" alt="" height="20px" width="20px">
            </div>
        </div>
    </ol>
</nav>
</div>
    
  
 <style>
    p{
        margin-top:50px;
        text-align:center;
        font-size:80px;
        background-color: rgb(220, 231, 240);
    }
    div{
        
        text-align:center;
    }
 </style>
  <!-- <p>Choose Payment Method</p> -->
    
    <?php

$servername="localhost";
$username="root";
$password="";
$database="hrishi";
error_reporting(0);
$conn=mysqli_connect($servername,$username,$password,$database);

   
    
        $total1=$_POST['Bill'];
          ?><center><h1>Grand Total:<?php echo $total1;?></h1></center>
        <?php

        
            $servername="localhost";
            $username="root";
            $password="";
            $database="hrishi";
            
            $conn=mysqli_connect($servername,$username,$password,$database);
            error_reporting(0);
           
        ?>


  <!DOCTYPE html>






  
  <div class="container-main">



  <div class="row justify-content-md-center">
            <div class="col col-lg-5">

                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>PLACE YOUR ORDER</h2>

                    </div>
                    <div class="card-body">
                        <form action="billimplement.php" method="POST" autocomplete="off">
                            <?php
                                       $id=$_SESSION['uname'];
                                $sql="select * from login where userid='$id'";
                                // $sql="select p_name from menu";
                                
                                $result=mysqli_query($conn,$sql);
                                mysqli_data_seek($result,0);
                                while($row=mysqli_fetch_array($result))
                                {  


                             
                            
                            echo"<div class='form-group'> <label for='name'>Your Name:</label>
                                <input type='text' class='form-control' id='name' placeholder='Enter full name'
                                    name='Name' value='".$row["Name"].$row["surname"]."' required><br>
                            </div>
                            
                            
                            <div class='form-group'> <label for='e mail'>e-mail:</label>
                            <input type='email' class='form-control' id='email' placeholder='Enter e mail'
                            name='email' value='".$row["email"]."' required><br>
                        </div>
                       
                        
                        <div class='form-group '> <label for='username'>mobile no.:</label>
                        <input type='number' class='form-control' id='mobileno' placeholder='Enter mobile no'
                        name='mobileno' value='".$row["phone_no"]."' required><br>
                    </div>
                    
                 <div class='form-group '> <label for='Address'>Address:</label>
                 <textarea class='form-control' name='address' id='' value='".$row["address"]."' placeholder='Enter address' cols='30' rows='2' required>".$row["address"]."</textarea>";
                }?>
             </div><br>
            
                   
                            <div>
                                <select name="pay_method">

                                    <option value="Credit_Card">Credit card</option>
                                    <option value="cash-on-delivery">cash-on-delivery</option>
                                    <!-- <option>Paytm</option> -->
                                </select>
                                

                            </div><br>
                           
                            <?php
                                        $id=$_SESSION['uname'];
                            $sql="select * from menu where userid='$id'";
                            // $sql="select p_name from menu";
                              
                            $result=mysqli_query($conn,$sql);
                            mysqli_data_seek($result,0);
                            while($row=mysqli_fetch_array($result))
                            {  
                                // echo $row['p_name']."<br>";    
                               
                       echo"<input type='hidden' name='p_name' value='$row[p_name]'>";      
                       echo"<input type='hidden' name='p_price' value='$row[p_price]'>";
                       echo"<input type='hidden' name='Quantity' value='$row[Quantity]'>";
                       echo"<input type='hidden' name='image' value='$row[image]'>"; 
                       echo"<input type='hidden' name='status' value='pending'>";
                       $total=$total+$row['Quantity']*$row['p_price'];
                    }
                    echo"<input type='hidden' name='total' value='$total'>";
                   
                    
                    ?>
                            <input type="submit" class="btn btn-danger w-100" onclick="alertbox()" value="Order"><br>
                            <div>
                    
              </div>

                    </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
  </div>
</div>



  <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>

</html>
  
  </body>
  </html>


                                
