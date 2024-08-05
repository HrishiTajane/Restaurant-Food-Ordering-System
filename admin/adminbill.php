
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
<html lang="en">
<head>
    <title>admin bill</title>
    <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    
   
                
  <a href="order.php"><button type="button" class="btn btn-primary">Back</button></a>
<div class="container">
   

                    <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="hrishi";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 error_reporting(0);

 if(isset($_POST['submit']))

             $id= $_POST['update1'];
            //  echo "$id";     
 $id=$_SESSION['uname'];
 $sql="select * from userorders where Name='$id'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);
 
   ?>
        
                                                   
                    
             



<style>

    .print{
        margin-top:0px;
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
            <h1> Pramod Restaurant <br>
            
            Bill</h1>
        </th>
    </tr>

    <?php
 if(isset($_POST['submit']))

$id= $_POST['update1'];
//  echo "$id";     
//  $id=$_SESSION['uname'];
$sql="select * from userorders where Name='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0)
{

mysqli_data_seek($result,0);

while($row = mysqli_fetch_array($result)){
   echo"<tr>";
   echo"<th>Name:&nbsp&nbsp $row[Name]</th><br>";
   echo"</tr>";
   echo"<tr>";
   echo"<th>E-mail:&nbsp&nbsp&nbsp$row[email]</th>";
echo"</tr>";
}
}
?>
    <tr>
        <td colspan="4" style="text-align: left; text-size:12px; ">
        <?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="hrishi";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 error_reporting(0);


//  $id=$_SESSION['uname'];
 $sql="select * from menu where Name='$id'";
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
 error_reporting(0);


//  $id=$_SESSION['uname'];
 $sql="select * from menu where Name='$id'";
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
                echo"<td>$row[p_name]</td>";
                echo"<td>$row[Quantity]</td>";
                echo"<td>$row[p_price]</td>";
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
<td><button class="btn btn-primary" onclick="printBill()">Print Bill</button></td>
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
<!-- *************** -->

</body>
</html>