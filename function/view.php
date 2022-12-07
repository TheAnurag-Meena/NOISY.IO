<?php
include '../assets/link.php';
include '../database/db.php';
include '../database/auth_session.php';
include '../assets/nav-top.php';
$app = $_GET['app'];
$sql1 = "SELECT * FROM `dataa` where app = '" . $app . "' And user = '". $_SESSION['username'] ."' ";
$result1 = mysqli_query($con, $sql1);
if (  mysqli_num_rows($result1) > 0) {
    // echo "Table Present";
    ?>
    <div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header text-center">
                📊 Application Information
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped data-table" style="width: 100%">
                        <thead>
                            <tr>

                                <th>KEY</td>
                                <th>STATUS</td>
                                <th>HWID</td>
                                <th>Delete</td>
                            </tr>

                        </thead>
                        <tbody>
                            <?php

                            // include("auth_session.php");
                            // require('db.php');// Using database connection file here
                            $sql = "SELECT * FROM `checkk` where username = '" . $app . "' ";
                            $records = mysqli_query($con, $sql); // fetch data from database
                            while ($data = mysqli_fetch_array($records)) {
                            ?>

                                <tr class="active-row" align="left">
                                    <td><?php echo $data['keyy']; ?></td>
                                    <td><?php echo $data['exp']; ?></td>
                                    <td><?php $man = $data['hwid']; ?></td>
                                    <td><a href="../extra/delete_key.php?id=<?php echo $data['keyy']; ?>&app=<?php echo $app; ?> "> Delete</a></td>
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
        <?php
        include '../assets/scripts.php';
        ?><?php
} else {
    echo "not present";
    // header("Location:../extra/success.php?message=Server+side+error+contact+later+.+&type=danger&tom=Sorry+!!!&link=../Pages/app1.php");
    // header('Location: ../extra/success.php?message=App+successfully+created+and+deployed&type=success&tom=Well+done+🙌&link=../function/create-app.php');
    ?>
    <script type="text/javascript">
window.location.href = '../extra/success.php?message=Server+side+error+connect+later+.+&type=danger&tom=Sorry+🥺&link=../Pages/app1.php';
</script>
<?php
}
?>
<div class="container text-center" style="padding-top:8%">
      <div class="row">
    <div class="col-md-6 offset-md-3">
    <a href="../Pages/app1.php"><button type="button" class="btn btn-primary btn-lg">Back To Main Page</button></a>
    </div>
  </div>
</div>