<?php
 session_start();
 if($_SESSION['uname'])
 {
     echo '';
 }
 else{
    header("location:login_form.php");
 }

 include("dbconnect.php");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
   
 
<meta charset="UTF-8">
<title>Orders</title>
<style>
body{
    background-color: rgb(221, 234, 242);
}
.cart-order{
margin-top:100px;
height:300px;
}
.card-body{
 align-items:center;
 justify-content:center; 
 height:50px;
 display:flex;
 }

.tr{
background-color:white;
}

.list{
font-size:33px!important;
}

.pending{
color:rgb(255, 0, 0)!important;
}
.complete{
color:rgb(0, 205, 0)!important;
}
.add-food-btn {
 height:43px;
 width:180px;
 background-color:blue;
 color:white;
 border-radius:4px;
 }
 .add-food-btn:hover {
 background-color:transparent;
 color:blue;
 border:1px solid blue;
 }

</style>
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

.ul {
    list-style-type: none;
    padding: 5px;
    display: flex;
    margin-left:580px!important;

}

.ul li a {
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


  
        <div class="aside sidebarGo">
   <style>
    .ul{
        margin-left:650px;
    }
    nav{
        justify-content:center;
    }
    </style>

            <ul class="ul">
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
      <div class="row mt-4">
                  <?php
                      $username=$_SESSION['uname'];
                      include("dbconnect.php");
                    //   $sql="select * from userorders where userid='$username'";
                    //   $result=$conn->query($sql);
                     
                       $sql="select * from userorders";
                       $result=mysqli_query($conn,$sql);
                       $x=mysqli_num_rows($result);             
		                 if($x==0)
		                 {
		                	 
                            ?> 
	            			 <div class="card cart-order">
	            			   <div class="card-body text-center">
	            			     <div>
	            			          <h3>NO ORDERS YET!</h3>
	            			         <a href="Menu.php"><button type="button" class="add-food-btn mt-3">Add Food</button></a> 
	            			     </div>
	            			   </div>
	            			 </div>
	            			 
	            			<?php
		                 }
		                 else{
		                	 
		                 
		               
		              ?>
        <div class="col-md-12">
     
		 <table class="table mt-5">
		    
		   <tbody> 
           <?php
                      $uname=$_SESSION['uname'];
                      include("dbconnect.php");
                      $sql="select * from userorders where userid='$uname'";
                      $result=$conn->query($sql);
                      if(mysqli_num_rows($result) > 0)
                      {
                      while($row = $result->fetch_assoc())
                      {
                  ?>
		      <tr class="tr">  
		        <td> </td>  
		        <td width="180px" ><img src="uploaded_img/<?php echo $row['image'];?>" class="" height=100px width="110px"></td>
		         <td class="td"><?php echo $row['p_name'];  ?><br><br>
                  </td>
		         <td class="td" width="290">  &#8377; <?php echo $row['p-price'];?></td>
                 
		       
		         
		         <?php
		         if($row['status']=='pending')
		         {
		            ?> 
                    
                    <td width="400"> 
                        <ul>
                            <li class="list pending"> </li>
                       </ul>
                       Order Pending &nbsp&nbsp&nbsp&nbsp  <a href="deleteorder2.php"> 
                        <button type="submit" class="btn btn-danger">Cancel Order</button></a></td>   <?php
		         }
		         else if($row['status']=='rejected'){
		        	 ?> <td> <ul><li class="list pending"></li> </ul>
		        	         Order has been rejected</td>   <?php
		         }
                 else{
                    ?> <td> <ul><li class="complete list"></li> </ul>
                    Order Placed <br> Your items has been delivered</td>   <?php
                 }
		         ?>
		         
		         
		     </tr>
		     
		     <tr class="empty-row"><td> </td><td> </td><td> </td><td> </td> </tr>
		     
             <?php } ?> 
		   </tbody> 
		 </table>
     </div>
     <?php } ?>
     <?php } ?>
     </div>
     </div>
</body>
</html>