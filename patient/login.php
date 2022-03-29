
<!--Log in page for patient/user-->
<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
    <title>Patient Section</title>
        <!---Bootstrap 5.1.3--->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
            <form>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hospital System | Patient Login</h5>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" name="patEmail">
                            <label for="floatingEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="patPassword">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-center mb-3">
                            <a href="#">Forgot Password?</a>
                        </div>
                        
                        <a href="dashboard.php" class="btn btn-primary mb-3">SIGN IN</a>

                        <div class="text-center mb-3">
                            <a href="patreg.php">Create Account</a>
                        </div>
                    </div>
                </div>
            </form>
    </body>
</html>