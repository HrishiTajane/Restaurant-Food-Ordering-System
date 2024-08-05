<?php
//  print_r($_POST);
 $id=$_POST['merchantId'];
 $amount = $_POST['amount'];
 $amt =$amount/100;
 $transactionId = $_POST['transactionId'];
 ?>

 

<html>
<head>
    <style>
        body,html {
  height: 100%;
}

body {
  padding-top: 50px;
  
}

#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;
}

footer{
  display: block;
}

.mypanel{
  border: 1px solid #eaeaec; 
  margin: -1px 19px 3px -1px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05); 
  background-color: #FAFAFA;  
  padding:15px;
  border-radius: 5px;
}

input{
  border: 5px solid white;
}

.box{
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid GREY;
}
    </style>
  <title>Payment Successfull</title>
</head>

<link rel="stylesheet" href ="COD.css">
<link rel="stylesheet" href ="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<body>



      <div class="container">
        <div class="jumbotron">
          <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
        </div>
      </div>
      <br>

<h2 class="text-center"> Thank you for Ordering Hrishi's Restaurant '! <br> The ordering process is now complete.</h2>

<?php 
  $num1 = rand(10,9); 
  $num2 = rand(10,9); 
  $num3 = rand(10,9);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3><br>
<h3 class="text-center"> <strong>Your Order Amonut:</strong> <span style="color: blue;"><?php echo "$amt"; ?></span> </h3>
<form action="home.html">
  <style>
      .bg-primary{
          height:50px;
          width:100px;
          border-radius:10px;
      }
      form{
          margin-top:50px;
          margin-left:650px;
      }

  </style>    
<input type="submit" class="bg-primary" value="OK">
</form>

</body>
</html>


