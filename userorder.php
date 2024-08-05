
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
        <!-- <link rel="stylesheet" href="js/bootstrap.min.js"> -->
        <link rel="stylesheet" href="sidebar2.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   </head>
     <body>
     <div class="container-main">
        <style>
            ul{
                margin-left:580px;
            }
            nav{
                justify-content:center;
            }
            </style>
        <nav style="z-index: 5;">


            <ol>
                <div id="viewport" class="container-fluid">


                    <!-- ======side bar start======  -->
                    <div class="aside sidebarGo">

                        <ul>
                            <li><a href="Home.html" class="active">Home</a></li>
                            <li><a href="Menu.php">Menus</a></li>
                            <li><a href="Mycart.php">cart</a></li>
                            <li><a href="order-status-show.php">Order</a></li>
                            <li><a href="userorder.php">Bill</a></li>
                            <li><a href="profile.php"><i class="bi bi-person-circle"></i></a></li>
                        </ul>

                    </div>
                   
                </div>
            </ol>
        </nav>

        <!-- =======side bar end====== -->

    </div>
    
            <!-- CSS -->
    <style>

    .print{
        margin-top:90px;
    }

    table {
        margin: auto;
        item-align:left;
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }
    
    /* Apply styles specifically for printing */
    @media print {
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
        }
        
        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tbody td {
            border-top: none;
        }
        
        tfoot td {
            text-align: right;
        }
    }
</style>

<script type="text/javascript">
    function printBill() {
        window.print();
    }
</script>
     
         <!-- CSS -->

        
  <?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="hrishi";
  $id=$_SESSION['uname'];
  $conn=mysqli_connect($servername,$username,$password,$database);
//   error_reporting(0);
  $sql="select * from userorders where userid='$id'";
  
  $result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){

                           

?>

<div class="print">
<div class="container" >
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
         
        </div>
        <div class="panel-body">
          <table class="table" border="2"  id="billTable">

   <thead>
    <tr>
        <th colspan="4">
            <h1> Hrishi Restaurant <br>
            
            Bill</h1>
        </th>
    </tr>
    <tr>
        <td colspan="4" style="text-align: left; text-size:12px; ">
        <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="hrishi";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
//  error_reporting(0);


 $id=$_SESSION['uname'];
 $sql="select * from userorders where userid='$id'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);
 
 if (mysqli_num_rows($result) > 0)
 {
  
    mysqli_data_seek($result,0);
    $total=0;
  while($row = mysqli_fetch_array($result)){
    $total=$total+$row['Total'];
  
   ?>
            <?php
             echo"<tr>";
             echo"<th>Name:&nbsp&nbsp $row[Name]</th><br>";
             echo"</tr>";
             
             echo"<tr>";
                echo"<th>E-mail:&nbsp&nbsp&nbsp$row[email]</th>";
            echo"</tr>";

            echo"<tr>";
                echo"<th>Address:&nbsp&nbsp&nbsp$row[address]</th>";
            echo"</tr>";
            echo"<tr>";
                echo"<th>Payment Mode:&nbsp&nbsp&nbsp$row[pay_method]</th>";
            echo"</tr>";
               }}?>
       
        
          <td> </td>
        </td>
    </tr>
    <tr>
        <th>Food Name</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Total</th>
    </tr>
</thead>

   
        
          
        
        <tbody>
        <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="hrishi";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
//  error_reporting(0);


 $id=$_SESSION['uname'];
 $sql1="select * from userorders where userid='$id'";
 $result1=mysqli_query($conn,$sql1);
 $row=mysqli_fetch_array($result1);
 
 if (mysqli_num_rows($result1) > 0)
 {
  
    mysqli_data_seek($result1,0);
    $total=0;
  while($row = mysqli_fetch_array($result1)){
    $total=$total+$row['Total'];
  
   ?>
            <?php
             echo"<tr>";
                echo"<td>$row[p_name]</td>";
                echo"<td>$row[Quantity]</td>";
                echo "<td>".$row['p-price']."</td>";
                echo"<td>$row[Total]</td>";
            echo"</tr>";
               }}?>
        </tbody>
        <tfoot>
           
<tr>
<td class="right"><b>Total Price</b></td>
<td></td>
<td><b></b></td>
<td><b><?php echo $total;?></b></td>
</tr>
<tr>
    <script>
       function alertbox(){
        alert("Your order is Cancel");
       }
    </script>
<form action='deleteorder.php' method='POST'>
                    <td colspan=3>
                    <input type='submit' name='delete_button' class='btn btn-danger' onclick='alertbox()' value='Cancel order'>
                    
                    </form>
</tr>
</tfoot>
</table>
     
<div class="text-center">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="button">
 <button class="btn btn-primary" onclick="printBill()">Print Bill</button>
 
 </div>
 <style>
                button{
                    
                    margin-left:950px;
                }
                </style>
 <?php
            }
            else{
                
          
            
            ?>
             <style>
              
          center{
            margin-top:200px;
         }
          #orderbutton{
            color:white;
            font-size:30px;
          }
          .bg-primary:hover {
            /* background-color: #ff4d4d; */
            color: white;
            box-shadow: 15px 15px 15px aqua;
        }
            </style>
            <center>

            <h1>No Order available </h1>
            <div id='order'>
           <a href="menu.php"> <input type="submit" class="bg-primary w-25" id="orderbutton" value="Order now"></a>
           </div>
        </center>
      <?php
        }
        ?>
 
 <script src="js/jquery-3.6.1.js"></script>
  <script src="sidebar2.js"></script>
</body>
</html>

