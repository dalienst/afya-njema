<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
        <title>Patient Section</title>
        <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <!--css file-->
        <link rel="stylesheet" href="css/pat.css">        
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-title">
                <h2>Patient</h2>
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
                        <a href="appointment.php">
                            <!--add icon using span-->
                            Appointments
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="treatment.php">
                            <!--add icon using span-->
                            Treatment History
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="#">
                            <!--add icon using span-->
                            Profile
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
                    Treatment | Diagnosis
                </h2>
            </header>
            <section class="home">
               <span id="message"></span>
               <div class="card shadow mb-4">
                   <div class="card-header py-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="m-0 font-weight-bold text-danger">Treatment | Diagnosis</h6>
                            </div>
                            <!--<div class="col" align="right">
                                <button class="btn btn-danger" onclick="openForm()">BOOK NEW</button>
                            </div>-->
                            <!--<div class="col" align="right">
                                <button type="button" name="add_doctor" id="add_doctor" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            </div>-->
                        </div>
                   </div>
                   <div class="card-body">
                       <div class="table-responsive">
                           <table class="table table-bordered" id="appointment_table" width="100%" cellspacing="0">
                               <thead>
                                   <tr>
                                       <th>Date</th>
                                       <th>Diagnosis</th>
                                       <th>Treatment</th>
                                   </tr>
                               </thead>
                           </table>
                       </div>
                   </div>
                    </div> 
                </div>
            </section>
    </body>   
</html>

