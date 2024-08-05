
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<meta charset="UTF-8">
<title>Orders</title>
<style>
   body{
      background-color: rgb(221, 234, 242);
  }
.card{
margin-left:27px;
margin-right:27px;
}
.select-box{
width:200px;
height:35px;
border-radius:4px;
background-color:transparent;

}
.date-box{
width:200px;
height:35px;
border-radius:4px;
}
.filter-button{
width:130px;
height:35px;
background-color:#0000FF;
color:white;
border-radius:6px;
}
.select{
float:left;
padding-right:20px;
}
 .search-box{
margin-left:35%;
} 
.view-button{
width:90px;
height:33px;
background-color:#0000FF;
color:white;
border-radius:6px;
}

.container-body{
  margin-left:250px;
}

</style>
</head>
<body>
         
<?php
  include("navbar.php");
  ?>
      <div class="container-body">
        <div class="card">
          <div class="card-header">
             <h3>Orders</h3>
          </div>
            
          
         
             <div class="tables">
                <table class="table table-bordered"> 
                  <thead>
                   <tr> 
                     <th class="text-center" width=70>Sr.no</th>
                     <th class="text-center">Customer Name</th>
                     <th class="text-center">Status</th>
                     <th class="text-center">Order Placed at</th>
                     <th class="text-center">Action</th>
                   </tr>
                  </thead>
                
                <tbody>
                <?php
                  include('dbconnect.php');
                  $sql="SELECT * FROM userorders";
                  $result=$conn->query($sql);

                  $srno=1;
                  if(mysqli_num_rows($result) > 0)
                  {
                  while($row = $result->fetch_assoc())
                  {
                ?>
                         <tr>
                           <td class="text-center"><?php echo $srno; $srno++; ?></td>
                           <td><?php echo $row['Name']; ?></td>
                           <td class="text-center"><?php echo $row['status']; ?></td>
                           <td  class="text-center" ><?php echo $row['date']; ?></td>
                           <td class="text-center"><a href="ordershow.php?id=<?php echo $row['id']; ?>"><button type="button" class="view-button">View</button></a></td>
                         </tr>
                 <?php   
                  }
                }
                 ?> 
                    
                  
                  
                  
                </tbody>
                
                
                </table>
             </div>
      
      
            
          </div>                              
      </div>
</body>
</html>