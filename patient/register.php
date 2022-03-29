<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
    <title>Patient Section</title>
        <!---Bootstrap 5.1.3--->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css"
    </head>
    <body>
        <form action="#" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registration</h5>
                    <hr>
                    <div class="row g-3">
                        <!-- Names-->
                        <div class="col-12">
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

                        <a href="#" class="btn btn-primary mb-3">SUBMIT</a>
                        
                        <div class="text-center mb-3">
                            <a href="patient.php">Already have an accout? Log in here</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>