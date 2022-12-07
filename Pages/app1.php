<?php
include("../database/auth_session.php");
require('../database/db.php');
?>
<?php
//$tab_query = "SELECT * FROM dataa ";
$tab_menu = '';
$tab_content = '';
$i = 0;
$product_query = "SELECT * FROM `dataa` where user = '" . $_SESSION['username'] . "' ";
$product_result = mysqli_query($con, $product_query);
while ($sub_row = mysqli_fetch_array($product_result)) {
    
                    $sql = "SELECT * FROM `dataa` where `app`=  '".$sub_row["app"]."' ";
                    $res = mysqli_query($con,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  
                            

                     
    
    $tab_content .= '

  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../upload/'. $images["image_url"] . '"  data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text text-center"> ' . $sub_row["app"] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group text-center">
                     <a href="../function/view.php?app='. $sub_row["app"] . ' "><button type="button" class="text-center btn btn-sm btn-outline-secondary " style=" align : center;padding-left : 50px; padding-right:50px">View</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  ';
}
}
                    } 
$tab_content .= '<div style="clear:both"></div></div>';
$i++;
//  if ($i == ) {
//   # code...
//  }
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
    <title>FreeKey 2.0</title>
</head>

<body>
    <!-- top navigation bar -->
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
                        <li class="dropdown-item">
                            <button type="button" class="btn ms-1" onclick="location.href = '../Pages/application.php'">Detailed View</button>
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
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
        <div class="row p-2">
            <div class="col-xs-12 col-sm-6 col-md-8 ">
                    <a href="../function/create-app.php" style="text-decoration: none; color: white;">
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
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="../function/gen-key.php" style="text-decoration: none; color: white;">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body py-5 fs-1 fst-italic  fw-bold font-monospace ">Generate Keys</div>
                        <div class="card-footer d-flex">
                            More Details
                            <span class="ms-auto">
                                <a style="color: white;text-decoration: none;" href="../function/gen-key.php">
                                    <i class="bi bi-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="row p-2">
                <?php echo $tab_content; ?>

            </div>
            <!-- End of .container -->
        </div>
        <!-- <div class="container my-5"> -->

        <footer class="bg-light text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-primary btn-floating m-1
        href=" #!" role="button"><i class="bi bi-facebook"></i></a>

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
        </footer>
        </div>
        </div>
        </div>
        </div>

    </main>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/my.js"></script>
    <script src="../js/pg_redirect.js"></script>


</body>

</html>