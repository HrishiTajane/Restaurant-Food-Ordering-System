<?php
session_start();
                    if($_SESSION['uname'])
                    {
                  
                        
                    }
                    else{
                        header("location:login_form.php");
                    }
                    ?>
<!DOCTYPE html> 
<html>

<head>
    <title>Online Food Order</title>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   
    <link rel="stylesheet" href="sidebar2.css">

    <script>
                function alertbox(){
                    alert("1 food-item remove in Cart");
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
                    margin-left:580px;
                }
                nav{
                    justify-content:center;
                }
                </style>

                        <ul>
                            <li><a href="Home.html" class="active">Home</a></li>
                            <li><a href="Menu.php">Menus</a></li>
                            <li><a href="Mycart.php">cart</a></li>
                            <li><a href="order-status-show.php">Order</a></li>
                            <li><a href="userorder.php">Bill</a></li>
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

<div class="container">  
    <style>
            #heading{
                
                background-color: rgb(220, 231, 240);
            }
            p{
                
                text-align:center;
                
                margin-top:60px;
            }
        </style>
        <div id="heading">
            <center>
                <p>Your food order cart</p>
            </center>
        </div>
               
                <?php
                  $servername="localhost";
                  $username="root";
                  $password="";
                  $database="hrishi";
                  $id=$_SESSION['uname'];
                  $conn=mysqli_connect($servername,$username,$password,$database);
                  error_reporting(0);
                  $sql="select * from menu where userid='$id'";
                  
                  $result=mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0){

                                           

                ?>
                                  
<div class="card">
 <div class="card-body">
     <table class="table table-striped">
        <thead>
            <tr class="bg-primary">
           
           
            <th width="40%">Item name</td>
       
            <th>Item Qty</th>
            <th>Item price</th>
            <th>Order Total</th>
            <th>Action</th>      
            </tr>
        </thead>
        <tbody>
        
                <?php 
                  
                    

                $servername="localhost";
                $username="root";
                $password="";
                $database="hrishi";
                
                 $id=$_SESSION['uname'];
                //  echo"$id";
                $conn=mysqli_connect($servername,$username,$password,$database);
                error_reporting(0);
                $sql="select * from menu where userid='$id'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                mysqli_data_seek($result,0);
                while($row=mysqli_fetch_array($result))
                {  
                    echo"<tr>";
                   
                    echo "<td >".$row['p_name']."</td>";
                   
                    echo "<td>".$row['Quantity']."</td>";
                    echo "<td >".$row['p_price']."  Rs</td>";
                    echo "<td >".$row['Total']."  Rs</td>";
                    
                    echo"<form action='delete.php' method='POST'>";
                    echo "<td colspan=3>
                    <input type='submit' name='delete_button' class='btn btn-danger' onclick='alertbox()' value='Remove'>
                    <input type='hidden' name='delete_query' value=". $row['p_id']."></td>";
                    echo "</form>";
                    echo "</tr>"; 
                
                    $total=$total+$row['Quantity']*$row['p_price'];
 
                }
                
                ?>
            <tr>
                <th></th>
                <th></th>
                <td align="center">Total</th>
                <td>
                    <?php
                
                echo"$total";
                ?>
                </th>
                <th></th>
                
            </tr>
            
            
        </tbody> 
        
    </table>

<div>
    <style>
        #buton{
            margin-top:20px;
        }
        #buton2{
            margin-top:20px;
            margin-left:900px;
            margin-top:1px;
        }
    </style>
    <a href="menu.php"> <input type='submit' id='buton' name='cart' class='btn btn-warning' value='add more food'></a>
<?php

?>
   <form action="bill.php" method="POST"><input type='submit' id='buton2' name='bill1' class='btn btn-primary' value='Check bill'>
   <input type='hidden' name='Bill' value="<?php echo "$total";?>">
  </form>
</div>
</div>
</div>
</div>

<?php
        }
        else{
         
          ?> 
          <style>
         h1{
            margin-top:100px;
            font-size:70px;
            padding:30px;
          }
          .bg-primary{
            height:60px;
          }
          #orderbutton{
            color:white;
            font-size:30px;
          }
          .bg-primary:hover {
            background-color: #ff4d4d;
            color: white;
            box-shadow: 15px 15px 15px aqua;
        }
          
      </style> 
          <center>
            <h1> Your Cart is empty</h1>
            <div id='order'>
           <a href="menu.php"> <input type="submit" class="bg-primary w-25" id="orderbutton" value="Order now"></a>
           </div>
        </center>
       <?php
          }
         
        ?>


        <script src="sidebar2.js"></script>

</body>
</html>