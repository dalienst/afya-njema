<?php
session_start();

if(isset($_POST["btn"])){
include('connect.php');
$name=$_POST['fullName'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$sql=("insert into pharmacist(fullname,email,contact,password,cpassword,gender) values('$name','$email','$phone','$password','$cpassword','$gender')");
if($sql)
{
    echo "<script>alert('Pharmacist info added successfully');</script>";
}
mysqli_query($con, $sql);
header("location:pharmacists.php");
}
?>


<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0"
            name="viewport"
            charset="UTF=8"
            http-equiv="Content-Type">
        <title>Admin | Add Pharmacist</title>
            <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/book.css">
    </head>
    <body>
        <div class="card">
            <h3 class="card-title">Create New Pharmacist</h3>
            <hr>
            <div class="card-body">
                <form action="addpharm.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Names</label>
                            <input type="text" class="form-control" name="fullName" id="fullName">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"> 
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="cpassword">
                        </div>
                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineCheckBox">Male</label>
                                <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="male">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineCheckBox">Female</label>
                                <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="female">
                            </div>
                        </div>

                        <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER</button>

                        <a href="dashboard.php" class="btn btn-danger">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>