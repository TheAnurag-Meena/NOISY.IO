<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../dashboard.php');
    exit;
}
include("../database/auth_session.php");
require('../database/db.php');
$id = $_GET['id']; 
$app = $_GET['app'];// get id through query string
 // Using database connection file here
 $sql1 = "SELECT * FROM `dataa` where app = '" . $app . "' And user = '". $_SESSION['username'] ."' ";
 $result1 = mysqli_query($con, $sql1);
 if (  mysqli_num_rows($result1) > 0) {
    $del = mysqli_query($con,"delete from dataa where id = '$id'"); // delete query

if($del)
{
    $filedel = $app.".php";
    unlink("../exclude/$filedel");
    $sql = " DROP TABLE ".$app ;
    $delo = mysqli_query($con,$sql);
    mysqli_close($con); // Close connection
    header("location:../extra/success.php?message=Application+Deleted+successfully+&type=success&tom=Woah+!!!&link=../Pages/application.php"); // redirects to all records page
    
    exit;	
}
else
{
    ?>
    <script type="text/javascript">
window.location.href = '../extra/success.php?message=Server+side+error+contact+later+.+&type=danger&tom=Sorry+!!!&link=../Pages/application.php';
</script> // display error message if not delete
<?php
}
 }
 else {
    ?>
    <script type="text/javascript">
window.location.href = '../extra/success.php?message=Server+side+error+contact+later+.+&type=danger&tom=Sorry+!!!&link=../Pages/application.php';
</script>
<?php
 }



?>