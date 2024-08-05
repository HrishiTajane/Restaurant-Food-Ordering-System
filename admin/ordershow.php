<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
.card{
margin:20px;
}
.h3{
margin-left:20px;
}
.back_btn{
height:30px;
width:80px;
background-color:blue;
color:white;
border-radius:4px;
margin-top:-45px;
margin-left:90%;
}
.name{
float:left;
padding-right:30px;
margin-bottom:10px;
}
.input-box{
width:240px;
margin-bottom:20px;
border:1px solid white;
}
.total{
justify-content:right;
display:flex;
margin-right:40px;
font-size:22px;
}

.in_process{
width:140px;
background-color:orange;
border-radius:5px;
color:white;
}
.completed{
width:140px;
background-color:green;
border-radius:5px;
color:white;
}
.select-box{
width:200px;
height:35px;
border-radius:4px;
background-color:transparent;

}

</style>
</head>
<body>
     <?php 
     include("dbconnect.php");
     ?>
         
         <div class="container-body">
           <div>
             <h3 class="mt-4 h3">Order details</h3>
              <a href="order.php"><button type="button" class="back_btn">Back</button></a>
           </div> 
           <div class="card">
             <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <?php
                   $id=$_REQUEST['id'];                  
                   $sql="SELECT * FROM userorders where id='$id'";
                   $result=$conn->query($sql);
                   $row = $result->fetch_assoc()

                  ?>
                   <h4>Delivery details</h4><hr>
                    <div class="name">
                      <label><b>First Name</b></label><br>
                      <input type="text" class="input-box" value="<?php echo $row['Name']; ?>" readonly>
                    </div>
                         
                    <div class="name">
                      <label><b>Email </b></label><br>
                      <input type="text" class="input-box" value="<?php echo $row['email']; ?>" readonly>
                    </div>

                     <div class="name">
                      <label><b>Contact Number</b></label><br>
                      <input type="text" class="input-box" value="<?php echo $row['mobileno']; ?>" readonly>
                     </div>
                     
                     <div class="name">
                       <label><b>Pin Code</b></label><br>
                       <input type="text" class="input-box" value="422601" readonly>
                     </div>
                     
                     <div class="name">
                       <label><b>Delivery Address</b></label><br>
                       <p><?php echo $row['address']; ?></p>
                     </div>
                   
                </div>
                
                <div class="col-md-6">
                  <table class="table mt-2">
                   <thead>
                     <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Quantity</th>
                     </tr>
                   </thead>
                   
                   <tbody>
                   <?php
                                  
                    
                   
                    $result=$conn->query($sql);
                    $srno=1;
                    if(mysqli_num_rows($result) > 0)
                    {
                    while($row = $result->fetch_assoc())
                    {

                   ?>
                   
                     <tr>
                       <td><img src="uploaded_img/<?php echo $row['image']; ?>"  height=60 width=60></td>
                       <td><?php echo $row['p_name']; ?></td>
                       <td width=100><?php echo $row['p-price']; ?></td>
                       <td><?php echo $row['Quantity']; ?></td>
                     </tr>
                     
                    <?php
                    }
                  }

                    ?>
                     
                     
                 
                   </tbody>
                    
                  
                  </table>
                  <div>
                  <?php
                                   
                   $sql1="SELECT * FROM userorders where id='$id'";
                   $result1=$conn->query($sql);
                   if(mysqli_num_rows($result1) > 0)
                   {
                   while($row1 = $result1->fetch_assoc())
                   {

                  ?>
                      <b class="total">Total Price : &#8377; <?php echo $row1['Total'];?> </b>
                  </div>
                    
                  
                  <div>
                 
                    <h6><b>Order Status :</b> <?php
                    if($row1['status']==("pending"))
                    { 
                    	?><button class="in_process text-center"> <?php echo "In Progress";?></button> <?php
                    }
                    else
                    { 
                     ?> 	<button class="completed text-center"> <?php echo "Completed";?></button> <?php
                    }
                    ?>
                    </h6>
                    
                    <p><b>Payment Mode :</b> <?php echo $row1['pay_method']; ?> </p>
                    <?php
                       $payment_status=$row1['status'];
                       
                      if($payment_status=="cash-on-delivery"){
                        ?>
                        <p><b>Payment Status :</b> <?php echo "Payment Pending"; ?> </p>


<?php
                      }else{?>
                        <p><b>Payment Status :</b> <?php echo "Payment Completed"; ?> </p>

                     <?php
                     }
                    ?>

                    <p><b>Placed At : </b> <?php echo $row1['date']; ?></p><hr>
                   
                 <div class="select">                  
                   <label>Update Order Status </label>
                   <form action="orderupdatestatus.php" method="post">
                   <select name="status" class="select-box">
                     <option value="pending">pending</option>
                     <option value="completed">completed</option>
                     <option value="rejected">Rejected</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                    <input type="submit" value="update" class="update-btn">
                    <?php } } ?>
                    </form>
                    
                   
                   </div>
                  </div>
                </div>
                
              </div>           
             </div>
           </div>
         </div>

</body>
</html>

