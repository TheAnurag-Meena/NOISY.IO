<?php
include("../database/auth_session.php");
require('../database/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="icon" href="../images/logo.ico">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/my.css">
    <title>FreeKey 2.0</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="../Pages/Dashboard.php"> 🔑 FreeKey 2.0</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="../Pages/profile.php">Profile Settings</a></li>
                        <li><a class="dropdown-item" style="border:3px red solid;" href="../Pages/logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="../Pages/Dashboard.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-columns-gap"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="../Pages/application.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-layers"></i></span>
                            <span>Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/profile.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/Community.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-people"></i></span>
                            <span>Community</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Resources
                        </div>
                    </li>
                    <li>
                        <a href="../Pages/downloads.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-box-arrow-down"></i></span>
                            <span>Downloads</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-code-square"></i></span>
                            <span>Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- <div class="row p-2">
                <div class="col-8">
                    <a href="application.php" style="text-decoration: none; color: white;">
                        <div class="card bg-primary text-white h-100">
                            <div class="card-body py-5 fs-1 fw-bold fst-italic font-monospace font-italic">Create Application</div>
                    </a>
                    <div class="card-footer d-flex">
                        More Details
                        <span class="ms-auto">
                            <a style="color: white;text-decoration: none;" href="#">
                                <i class="bi bi-chevron-right"></i></a>
                        </span>
                    </div>
                </div>


            </div> -->
    <main class="mt-5 pt-3 px-2">
        <div>
            <div class="text-center">
                <button type="button" class="btn btn-primary" style="width: 100%; height: 60px; background-color:#5561F5;"><i class="bi bi-discord "></i> Discord</button>
            </div>
            <div class="row pt-2">
                <div class="col-6">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" style="width: 100%; height: 60px;"><i class="bi bi-facebook "></i> Facebook</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" style="width: 100%; height: 60px; background-color:#2FC751;"><i class="bi bi-whatsapp "></i> Whatsapp</button>
                    </div>
                </div>
                <div class="col-12 pt-2">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" style="width: 100%; height: 60px; background-color:#E85E42;"><i class="bi bi-instagram "></i> Instagram</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="diss1 form-row d-flex align-items-center justify-content-center mt-2 ">
            <div class="col-md-2 text-center col-md-push-6 font-weight-bold text-uppercase font-size-big  ">
                Your Refferal code
            </div>

            <div class="col-md-9 col-md-pull-3 my-1 strech"><input type="text" value="THIS IS UNDER THE DEVELOPMENT PHASE" style="text-align: center;" readonly="" class="form-control form-control-wide"></div>
            <div class="col-md-1 col-md-pull-3 my-1 p-2"><button type="submit" class="btn btn-primary">Copy</button></div>


        </div>
        <div class="cop row mb-6">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header text-center">
                        📊 Top Application Information
                    </div>
                    <h1 align="center">UNDER DEVELOPEMENT</h1>
                    <div class=" diss1 card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead align="center">
                                    <tr>
                                        <th> APP NAME</th>
                                        <th> DEVELOPER</th>
                                        <th> Total User</th>

                                    </tr>

                                </thead>
                                <tbody>
                                    <?php

                                    // include("auth_session.php");
                                    // require('db.php');// Using database connection file here
                                    $sql = "SELECT app,user FROM dataa limit 5";
                                    $records = mysqli_query($con, $sql); // fetch data from database
                                    while ($data = mysqli_fetch_array($records)) {
                                    ?>

                                        <tr class="active-row" align="center">
                                            <td><?php echo $data['app']; ?></td>
                                            <td><a href="../extra/public.php?profile=<?php echo $data['user']; ?>"><?php echo $data['user']; ?></a></td>


                                        </tr>

                                    <?php

                                    }
                                    ?>
                                </tbody>
                                <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                            </table>
                        </div>
                        <!-- Remove the container if you want to extend the Footer to full width. -->

                    </div>
                    <!-- End of .container -->
                </div>
    </main>

    <!-- <div class="d-flex justify-content-center">
                
                <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Twitter</a>
                <a class="btn btn-primary" style="background-color: #5661F5;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Discord</a>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" style="background-color: #5661F5;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Discord</a>
            </div>
            <div class="d-flex justify-content-center">
                
            </div> -->
    </div>
    </main>

    </div>
    <footer class="bg-light text-center text-white myfutto ">
        <!-- Grid container -->
        <div class=" container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1
        href=" #!"="" role="button"><i class="bi bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="bi bi-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="bi bi-youtube"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="bi bi-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="bi bi-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgb(33, 37, 41);">
            © 2022 Copyright:
            <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
            <!-- </div> -->
            <!-- Copyright -->
        </div>
    </footer>
    </div>
    </div>
    </div>
    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/my.js"></script>

</body>

</html>