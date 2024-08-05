<html>

<head>
    <title>Login Form</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    
</head>
<style>
    body {
        background: linear-gradient(120deg, #2980b9, #8e44ab);

    }

    .container {
        margin-top: 160px;
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
                        <h2>Login form</h2>

                    </div>
                    <div class="card-body">
                        <form action="login_form.php" method="POST">
                            <div class="form-group "> <label for="username">username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter uname"
                                    name="uname" required><br>
                            </div>
                            <div class="form-group"> <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="password" required><br>
                            </div>
                            <input type="submit" class="btn btn-danger w-100" value="Login">
                            <div>

                            
                                <?php

                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $database="hrishi";
                                       
                                        $conn=mysqli_connect($servername,$username,$password,$database);


                                        if($_SERVER["REQUEST_METHOD"]=="POST")

                                        {
                                            $username=$_POST["uname"];
                                            $password=$_POST["password"];
                                            $user_type=$_POST["user_type"];
                                           

                                        $sql="select * from login where username='$username'AND password='$password'";
                                        
                                        $result=mysqli_query($conn,$sql);

                                            
                                        if(mysqli_num_rows($result)==1)
                                        {                                        
                                            $row=mysqli_fetch_array($result);
                                            session_start();
                                            if($row['user_type']=='Admin')
                                            {
                                                $_SESSION['uname']=$row['username'];
                                                header("location:Admin.php");
                                            }

                                            elseif($row['user_type']=='User')
                                            {
                                                $_SESSION['uname']=$row['username'];
                                                header("location:Home.html");
                                            }                                            
                                            
                                            else
                                                {
                                                echo"incorrect details... ";
                                                
                                                
                                                }
                                            }
                                        } 
                                ?>

                            </div>

                    </div>
                    </form>
                    <div class="card-footer text-right">
                        <p>signup here
                        <a href="signup.php">Signup</a></P>

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.1.js"></script>
</body>

</html>    