<?php
session_start();

if(isset($_POST["btn"])){
include('connect.php');
$name=$_POST['fullname'];
$email=$_POST['email'];
$residence=$_POST['residence'];
$phone=$_POST['contact'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$ql=("insert into patients(fullname,email,residence,contact,password,cpassword,gender) values('$name','$email','$residence','$phone','$password','$cpassword','$gender')");
if($ql)
{
    echo "<script>alert('Patients added successfully');</script>";
}
mysqli_query($con, $ql);
header("location:patient.php");
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
        <!--css file-->
        <link rel="stylesheet" href="css/doc.css"> 
        <!--<script type="text/javascript">
            function valid()
            {
                if(document.adddoc.password.value!=document.adddoc.cpassword.value){
                    alert("Passwords do not match!!");
                    document.adddoc.cpassword.focus();
                    return false;
                }
                return true;
            }
        </script>-->
    </head>
    <body>
    <div class="sidebar">
            <div class="sidebar-title">
                <h2>Admin</h2>
            </div>
            <hr>
            <div class="sidebar-menu">
                <ul class="listItems">
                    <li>
                        <a href="dashboard.php">
                            <!--add icon using span-->
                            Dashboard
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="doctor.php">
                            <!--add icon using span-->
                            Doctors
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="addoctor.php">
                            <!--add icon using span-->
                            Add Doctor
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="patient.php">
                            <!--add icon using span-->
                            Patients
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="addpatient.php">
                            <!--add icon using span-->
                            Add Patient
                        </a>
                    </li>
                    <hr>
                </ul>
            </div>
    </div>

    <div class="main">
        <header>
            <h2>
            <!--<label for=""><span></span</label> add icon-->
                Add Patient
            </h2>
        </header>
        <section class="home">
            <form action="addpatient.php" method="POST">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Register New Patient</h5>
                    <hr>
                    <div class="row g-3">
                        <!-- Names-->
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Names</label>
                            <input type="text" class="form-control" name="fullname" id="fullname">
                        </div>

                        <!--email and residence-->
                        <div class="col-md-6">
                            <label for="docEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"> 
                        </div>
                        <div class="col-md-6">
                            <label for="residence" class="form-label">Residence</label>
                            <input type="text" class="form-control" id="residence" name="residence"> 
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

                        <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER PATIENT</button>                       
                    </div>
                </div>
                </div>
            </form>
        </section>
    </div>
    </body>
</html>