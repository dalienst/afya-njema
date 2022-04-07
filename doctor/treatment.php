<?php

if(isset($_POST["btn"])){
    include("connect.php");
    $tdate=$_POST['date'];
    $tname=$_POST['name'];
    $diagnosis=$_POST['diagnosisEntry'];
    $treatment=$_POST['treatmentEntry'];
    $sql=("insert into treatment(date,fullname,diagnosis,treatment)values('$tdate','$tname','$diagnosis','$treatment')");
    mysqli_query($con, $sql);
    header("location:dashboard.php");
    //header relocate to prompt success first
}
?>

<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
    <title>Treatment and Diagnosis</title>
        <!---Bootstrap 5.1.3--->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/book.css">
    </head>
    <body>
        <div class="card">
            <h3 class="card-title">Treat Patient <!--php code to echo patient details--></h3>
            <div class="card-body">
                <form action="treatment.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="tdate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="tdate" name="date">  
                        </div>
                        <div class="col-md-6">
                            <label for="tname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="tname" name="name">
                        </div>
                        <div class="input-group mb-2">
                            <textarea class="form-control" rows="8" name="diagnosisEntry" placeholder="Enter Diagnosis"></textarea>
                        </div>
                        <div class="input-group mb-2">
                            <textarea class="form-control" rows="8" name="treatmentEntry" placeholder="Enter Treatment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning" name="btn">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>