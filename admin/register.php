<?php
session_start();

if(isset($_POST["btn"])){
    include('connect.php');
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $q=("insert into admin(fullname,email,password,cpassword)values('$name','$email','$password','$cpassword')");
    if($q){
        echo "<script>alert('Admin added successfully');</script>";
    }
    mysqli_query($con, $q);
    header("location:login.php");
}
?>

<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
    <title>Admin Section</title>
        <!---Bootstrap 5.1.3--->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <form action="register.php" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admin Registration</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" name="fullname">
                        <label for="floatingText">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="cpassword">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                        
                    <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER</button>

                    <div class="text-center mb-3">
                        <a href="register.php">Already have an account? Log in here </a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>