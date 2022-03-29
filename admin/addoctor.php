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
                        <a href="#">
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
                        <a href="#">
                            <!--add icon using span-->
                            Patients
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
                Add Doctor
            </h2>
        </header>
        <section class="home">
            <form action="#" method="POST">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Register New Doctor</h5>
                    <hr>
                    <div class="row g-3">
                    <div class="col-md-6">
                            <label for="specialization" class="form-label">Doctor Speciality</label>
                            <input type="text" class="form-control" name="fullName" id="specialization">
                        </div>
                        <!-- Names-->
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Names</label>
                            <input type="text" class="form-control" name="fullName" id="fullName">
                        </div>

                        <!--email and residence-->
                        <div class="col-md-6">
                            <label for="patEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="patEmail" name="patEmail"> 
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
                            <label for="fees" class="form-label">Doctor Fees</label>
                            <input type="text" class="form-control" id="fees" name="docFees">
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

                        <a href="#" class="btn btn-primary mb-3">REGISTER DOCTOR</a>                       
                    </div>
                </div>
                </div>
            </form>
        </section>
    </div>
    </body>
</html>