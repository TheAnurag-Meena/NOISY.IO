<?php
include '../assets/link.php';
require('../database/db.php');
$db = $_GET['aname'];
function random_str(
    int $length = 64,
    string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
$a = random_str(12);
$ca = $db . "-" . $a;


$vb = "Active";

$added_on = date("Y-m-d H:i:s");
$sql = "INSERT INTO $db (`keyy`, `create_at`) VALUES ('" . $ca . "', '$added_on')";
$oml = " INSERT INTO `checkk`(`keyy`,`username`,`exp`,`create_at`) VALUES ('" . $ca . "' , '" . $db . "' , '" . $vb . "' , '" . $added_on . "')";
//$spl = "insert into oasis (create_at) values ('".$added_on."')";
$rs = mysqli_query($con, $sql);
$ps = mysqli_query($con, $oml);
//$rp = mysqli_query($con, $spl);
$affectedRows = mysqli_affected_rows($con);

if ($affectedRows == 1) {
    $successMsg = "Record has been saved successfully";
} else {
    $successMsg = "Nothing Affected";
}
$b = "First visit Sucess";

$name = "OASIS";



?>
<link rel="icon" href="../images/oasislogo.png">

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Key Generator</title>

    <?php
    include '../assets/link.php'
    ?>

</head>

<body background="../images/bb1.jpg">




    <section id="header">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <?php
                    $sql = "SELECT * FROM `dataa` where `app`= '$db' ";
                    $res = mysqli_query($con,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                            <img class="logo" src="../upload/<?= $images['image_url'] ?>" width="300" height="300" />
                    <?php }
                    } ?>
                    <h1 style="color: white  ;""><?php echo strtoupper($db) ?> OFFICIAL</h1>
						<div id=" countdown" class="white-text">
                </div>
                <div class="box" id="div1">

                    <input type="text" name="Name" id="myInput" value=<?php echo "$ca"; ?> size="20" style="font-size: 20pt; text-align:center;" text-align: center;>
                    
                </div>

                <button type="button" class="text-center btn  btn-outline-primary stretch " style="padding-left : 50px; padding-right:50px; margin-top: 25px;" onclick="myFunction()">Copy Key</button>

            </div>
        </div>
        </div>


    </section>





    <footer id="footer" style="padding-top:20% ;">
        <div class="container">
            <div class="row text-center" style="color: white;">
                <p>
                    &copy; 2021 | THE KEY GENERATOR
                </p>
            </div>
        </div>
    </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <?php include '../assets/scripts.php' ?>
        <script>
        function copyToClipboard(text) {
            var sampleTextarea = document.createElement("textarea");
            document.body.appendChild(sampleTextarea);
            sampleTextarea.value = text; //save main text in it
            sampleTextarea.select(); //select textarea contenrs
            document.execCommand("copy");
            document.body.removeChild(sampleTextarea);
        }

        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyToClipboard(copyText.value);
        }
    </script>

</body>
?>