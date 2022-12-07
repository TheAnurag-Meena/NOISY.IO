<?php

// require('../database/db.php');
// include("../database/auth_session.php");

include '../assets/link.php';
include '../assets/nav.php';
$pname = $_GET['pname'];
$id = $_GET['id'];
$version = $_GET['veri'];
$updatep = $_GET['updatep'];
?>

<link rel="stylesheet" href="../css/edit.css">

<?php
$qry = mysqli_query($con, "select * from dataa where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{

  $appname = $_POST['appname'];
  $version = $_POST['version'];
  $updatep = $_POST['updatep'];
  $ehwid = $_POST['hwid'];
  $edit = mysqli_query($con, "update dataa set app='$appname' where id='$id'");
  $sqp = mysqli_query($con, "update dataa set veri='$version' where id='$id'");
  $sql = mysqli_query($con, "ALTER TABLE $pname RENAME $appname ;");
  $sqs = mysqli_query($con, "update dataa set links='$updatep' where id='$id'");
  $psl = mysqli_query($con, "update dataa set hwid='$ehwid' where id='$id'");


  if ($edit) {

    mysqli_close($con); // Close connection
    ?><script type="text/javascript">
    window.location.href = '../extra/success.php?message=Application+Updated+successfully+&type=success&tom=Woah+!!!&link=../Pages/application.php';
    </script>
    <?php // redirects to all records page
    exit;
  } else {
    ?><script type="text/javascript">
    window.location.href = '../extra/success.php?message=Error+Updating+Application+&type=danger&tom=Sorry+!!!&link=../Pages/application.php';
    </script>
    <?php
  }
}
?>
<main class="mt-5 pt-3">
  <div class="container cod">
    <div class="row p-2">
      <h3>Update Data</h3>
      <div class="form">
        <form method="post" align="top">
          <label for="appname">Application Name </label> <input type="text" name="appname" value="<?php echo $data['app'] ?>" placeholder="Enter Full Name" Required><br><br>
          <label for="version">Vesion </label> <input type="number" name="version" value="<?php echo $data['veri'] ?>" placeholder="Enter Version" Required><br><br>
          <label for="version">Update Link </label> <input type="text" name="updatep" value="<?php echo $data['links'] ?>" placeholder="Enter UPDATE LINK"><br><br>
          <label for="hwid" class="poti">HWID </label>
          <select name="hwid" id="hwid" class="app">
            <option value="enable">Enable</option>
            <option value="dissable">dissable</option>
          </select><br><br>
          <input type="submit" name="update" class="btn btn-outline-dark poti" value="Update"><br><br>
        </form>
      </div>
      <br>
      <break>
        <div class="car">
          <?php if (isset($_GET['error'])) : ?>
            <p><?php echo $_GET['error']; ?></p>
          <?php endif ?>
          <form action="../extra/upload.php" method="post" enctype="multipart/form-data">

            <input type="file" name="my_image">
            <input type="hidden" id="pon" name="pon" value="<?php echo $id; ?>">

            <input type="submit" name="submit" value="Upload">

          </form>
        </div>

    </div>
    <!-- End of .container -->
  </div>