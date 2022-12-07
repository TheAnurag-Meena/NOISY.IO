<?php
include("../database/auth_session.php");
require('../database/db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$social = $_POST['Social'];
$user = $_SESSION['username'];
$public = $_POST['public'];

echo $email ;
// optional
// echo "You chose the following color(s): <br>";

// foreach ($col as $color){ 
//     echo $color."<br />";
// }

//echo $name , $email , $number , $address , $social;
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }




//   if ($public == "TRUE") {
//     echo "its true";
//   }
//   elseif ($public == "FALSE") {
//     echo "its false";
//   }
//   else{
//     echo "something wrong happened";
//   }

  
 // $int =  "INSERT INTO `users` (`name`, `mobile` , `address`, `social` , `email`) VALUES ('".$name."', '".$mobile."' , '".$address."' , '".$social."' , '".$email.")";
//  $int = "UPDATE `users` SET name ='".$name."', mobile ='".$mobile."' , address ='".$address." , social ='".$social."' , email ='".$email."'WHERE username='".$user."';";
//  if (mysqli_query($con, $int)) {
//     echo "successfully" ;
// } else {
//  echo "failed" ;
// } 
    $query = "UPDATE users
SET name='$name',
 address='$address',
 mobile='$number',
 social = '$social',
 email='$email',
 public = '$public'
 WHERE username='$user'";
 if (mysqli_query($con, $query)) {
      header('Location: success.php?message=Successfully+updated+your+profile'.$user.'&type=success&tom=Well Done!');
} else {
 echo "failed" ;
}
