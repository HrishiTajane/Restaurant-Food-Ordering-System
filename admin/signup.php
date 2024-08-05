<html>

<head>
    <title>sign Form</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>
<style>
    body {
        background: linear-gradient(120deg, #2980b9, #8e44ab);

    }

    .container {
        margin-top: 80px;
    }
    .card{
        
        box-shadow:10px 20px 20px 10px rgb(0,0,0,0.5);
    }
</style>

<body>
    <div class="container">

        <div class="row justify-content-md-center">
            <div class="col col-lg-5">

                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Signup form</h2>

                    </div>
                    <div class="card-body">
                        <form method="POST" autocomplete="off">
                            <div class="form-group"> <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter full name"
                                    name="Name" required><br>
                            </div>
                            
                            <div class="form-group "> <label for="username">surname:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter surname"
                            name="surname" required><br>
                            <div class="form-group "> <label for="username">phone no:</label>
                            <input type="text" class="form-control" maxlength=10 id="phone_no" placeholder="Enter phone no"
                            name="phone_no" required><br>
                        </div>
                        <div class="form-group"> <label for="e mail">e-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter e mail"
                                name="email" required><br>
                        </div>
                            <div class="form-group "> <label for="Address">Address:</label>
                            <textarea class="form-control" name="address" id="" cols="30" rows="2"></textarea>

                            </div>
                            <!-- <input type="text"  name="userid" value=""> -->



                            <div class="form-group "> <label for="username">username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter uname"
                                    name="uname" required><br>
                            </div>
                            <div class="form-group"> <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="password" required><br>
                            </div>
                            <div>
                                <select name="user_type">
                                    <option>User</option>
                                    <option>Admin</option>
                                </select>
                                

                            </div><br>
                            <!-- <div class="form-group"> <label for="pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Confirm password"
                                    name="cpassword"><br>  
                            </div> -->
                            
                            <input type="submit" class="btn btn-danger w-100" value="Submit"><br>
                            <div>
                     <?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database="hrishi";
                            session_start();
                            // $userid=$_POST['uname'];
                          
                           
                            $conn=mysqli_connect($servername,$username,$password,$database);
                if($_SERVER["REQUEST_METHOD"]=="POST")
                 {
                     
                   $name=$_POST['Name'];
                   $surname=$_POST['surname'];
                   $phone_no=$_POST['phone_no'];
                   $email=$_POST['email'];
                   $address=$_POST['address'];
                   $username=$_POST['uname'];
                   $password=$_POST['password'];
                   $user_type=$_POST['user_type'];
                   $userid=$_POST['uname'];
                 
                   error_reporting(0);
                   $sql="INSERT INTO `login`(`username`,`password`,`Name`,`user_type`,`surname`,`email`,`address`,`phone_no`,`userid`) VALUES('$username','$password','$name','$user_type',' $surname','$email','$address','$phone_no','$userid')";
                   $result=mysqli_query($conn,$sql);
                  

                 if(!$result)
                  {
                     die("sorry data not added".mysqli_connect_error());
                    
                  }
                 else
                  {
                
                ?>
                     <script> 
                    swal({
                        title: "regestration successfully",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Ok",
                      });
                      </script> 
                      <?php
                  }
                }

              ?>
              </div>

                    </div>
                    </form>
                    <div class="card-footer text-right">
                   <p> Login here 
                        <a href="login_form.php">&copy Login</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>

