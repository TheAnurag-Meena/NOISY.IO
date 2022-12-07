<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../dashboard.php');
    exit;
}
include("../database/auth_session.php");
require('../database/db.php');
 // Using database connection file here

$id = $_GET['id']; 
$app = $_GET['app'];// get id through query string

$sql1 = "SELECT * FROM `dataa` where app = '" . $app . "' And user = '". $_SESSION['username'] ."' ";
$result1 = mysqli_query($con, $sql1);
if (  mysqli_num_rows($result1) > 0) {
   $del = mysqli_query($con,"delete from checkk where username = '$app' and keyy = '$id'"); // delete query

 if($del)
 {
     //$filedel = $app.".php";
//     //unlink("c1/$filedel");
     $sql = "delete from $app where keyy = '$id'";
     $delo = mysqli_query($con,$sql);
   
   
     mysqli_close($con); // Close connection
     header("location:../function/view.php?app=$app"); // redirects to all records page
    
     exit;	
 }
else
{
    echo "Error deleting record"; // display error message if not delete
} 
}
else {
    ?>
    <script type="text/javascript">
window.location.href = '../extra/success.php?message=Server+side+error+contact+later+.+&type=danger&tom=Sorry+!!!&link=../Pages/app1.php';
</script>

<?php
}
?>