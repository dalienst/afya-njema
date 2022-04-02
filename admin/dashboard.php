<?php
include('session.php');

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
                <h1>
                    <!--<label for=""><span></span</label> add icon-->
                    Dashboard
                </h1>
                <div class="lout">
                    <a href="logout.php" class="btn btn-primary">LOG OUT</a>
                </div>
            </header>
            <section class="home">
                <!--code here-->
            </section>
        </div>
    </body>
</html>