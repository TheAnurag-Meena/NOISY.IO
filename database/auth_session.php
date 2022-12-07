<?php
    session_start();
    //$username = $_POST['username'];
    //$_SESSION['username'] = $username;
    if(!isset($_SESSION["username"])) {
        header("Location: /Free-Key-2.0/login.php");
        exit();
    }
   // $_SESSION["username"] ?? " " ;
?>
