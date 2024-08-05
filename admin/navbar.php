<html>
<head>
    <link rel="stylesheet" href="admin.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
     
     .resto-name{
    padding:30px;
    margin-top:30px;
    font-size:32px;
    font-weight:600;
    font-family:'Courier New', Courier, monospace;
    color:orange;
    }

    .container-main{
      margin-top:30px!important;
    }
    .horizontal-navbars{
        z-index: 5;
        width:100%;
        height:55px;
        top :0;
        position: fixed;
        display:flex;
        justify-content:space-between;
    }
    .logoutdiv{
      margin-top:13px;
      margin-right:20px;
    }
    .logoutdiv a{
      font-size:22px;
    }
   </style>
    </head>

<body>
        
    <nav class="horizontal-navbars bg-light">
        <div><span class="resto-name"><i>restaurant</i><span></div>
        <div class="logoutdiv"><a href="Logout.php" class="text-danger"><i id="close" class="bi bi-box-arrow-left text-danger"></i> Logout</a></div>

    </nav> 
<div class="container-main">   

    <nav>
      <ol>
        <div id="viewport" class="container-fluid">
          <!-- ======side bar start======  -->
          <div class="aside ">
                 
          <ul>
              <li class="li"><a href="admin.php" class="active"><i class="fa fa-home icon-nav"></i>&nbsp Dashboard</a></li>
              <li class="li"><a href="profile.php"><i class="fa fa-user icon-nav"></i> &nbsp Profile</a></li>
              <li class="li"><a href="customer.php"><i class="fa fa-users icon-nav"></i> &nbspCustomers</a></li>
              <li class="li"><a href="food.php"><i class="fa fa-book icon-nav"></i> &nbsp foods</a></li>
              <li class="li"><a href="order.php"><i class="fa fa-book icon-nav"></i> &nbsp Orders</a></li><br><br>
              <li class="li"><a href="report.php"><i class="fa fa-circle-o icon-nav"></i> &nbsp Report</a></li><br><br>
              <li class="li"><a href="Logout.php"> <i id="close" class="bi bi-box-arrow-left text-danger">&nbsp Logout</i></a> </li>
              
            </ul>

          </div>
         
      </ol>
    </nav>

</div>
<!-- =======side bar end====== -->


</body>
</html>