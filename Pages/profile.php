<?php
include("../database/auth_session.php");
require('../database/db.php');
$user = $_SESSION['username'];
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
    <link rel="stylesheet" href="../css/jp.css" />
    <title>FreeKey 2.0</title>
</head>

<body style="background-color: #eee ;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#"> 🔑 FreeKey 2.0</a>
      <div class="noisy">
        <ul class="navbar-nav">
          <li class=" nav-item dropdown dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">

              <li><a class="dropdown-item" href="#">Profile Settings</a></li>
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
            <a href="Dashboard.php" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-columns-gap"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-1">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <a href="application.php" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-layers"></i></span>
              <span>Application</span>
            </a>
          </li>
          <li>
            <a href="profile.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-person-circle"></i></span>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="Community.php" class="nav-link px-3 ">
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
  <main class="cop mt-5 pt-3 px-2">
    <section style="background-color: #eee;">
      <?php
      $sql = "SELECT * FROM users WHERE username='$user'";
      $records = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($records)
      ?>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="../images/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"><?php echo $_SESSION['username']; ?></h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4"><?php echo $data['address'] ?></p>
              <div class="d-flex justify-content-center mb-2">


                <button type="button" class="btn btn-outline-primary ms-1 stretch" onclick="location.href = '<?php echo $data['social']; ?>';">Social</button>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $data['name']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $data['email']; ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $data['mobile']; ?></p>
                </div>
              </div>
              <hr>
              <!-- <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div>
              <hr> -->
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $data['address']; ?></p>
                </div>

              </div>
            </div>
          </div>
          <div class="cop card mb-4 mb-lg-0">
            <button type="button" onclick="location.href = 'editprofile.php';" class="btn btn-outline-primary " style="height: 60px;">EDIT PROFILE</button>

          </div>
          <!-- <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        </div>
      </div>
      </div>
    </section>

  </main>

  </div>
  <footer class="myfutto footer ">
    <!-- Grid container -->
    <div class="container p-2 pb-0 ">
      <!-- Section: Social media -->
      <section class="mb-2">
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
    <div class="leftt text-center " style="background-color: rgb(33, 37, 41);">
      © 2022 Copyright:
      <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
    </div>
    <!-- Copyright -->
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