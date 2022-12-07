<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../dashboard.php');
    exit;
}
?>
<?php
 include("../database/auth_session.php");
// require('database/db.php');
error_reporting(E_ERROR | E_PARSE);
$message = $_GET['message'];
$typee = $_GET['type'];
$tom = $_GET['tom'];
$link = $_GET['link'] ?? '../Pages/dashboard.php';
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
    <link rel="stylesheet" href="../css/my.css" />
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
                        <li>
                            <a class="dropdown-item" href="#">Contact Support</a>
                        </li>
                        
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
                        <a href="../Pages/application.php" class="nav-link px-3 active">
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
                        <a href="../Pages/Community.php" class="nav-link px-3">
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
        <div class="alert alert-<?php echo $typee; ?>" role="alert" style="text-align: center ;">
            <h4 class="alert-heading"><?php echo $tom; ?></h4>
            <p><?php echo $message; ?></p>
            <hr>
            <!-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
            <p align="center"><button type="button" class="button4 btn btn-primary" onclick="location.href = '<?php echo $link ?>';">Go Back</button></p>

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
    <footer class="foot bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
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