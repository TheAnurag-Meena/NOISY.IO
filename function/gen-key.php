<?php
include '../assets/nav.php';
$sql = "SELECT * FROM `dataa` where user = '" . $_SESSION['username'] . "' ";
$all_categories = mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="../css/my.css" />
<link rel="stylesheet" href="../css/formq.css" />
<link rel="stylesheet" href="../css/jp.css" />

<body>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <h4>Generate Key</h4>
                </div>
                <div class="form-body ">
                    <div class="row">
                        <div class="form-holderr">
                            <div class="form-content formb ">
                                <div class="form-items">
                                    <form class="requires-validation" method="post" action="../extra/generate.php" autocomplete="off" novalidate>
                                        <div class="col-md-12">
                                            <select class="form-controll" list="aname" type="text" name="name" placeholder="Enter The Application Name" style="border: 3px solid #0d6efd;" required>
                                                <datalist id="aname" style="display: none;">
                                                    <?php
                                                    while ($dataa = mysqli_fetch_array(
                                                        $all_categories,
                                                        MYSQLI_ASSOC
                                                    )) :;
                                                    ?>
                                                        <option><?php echo $dataa["app"];
                                                                $cay = $dataa["veri"];  ?></option>
                                                        ?>">
                                                        <?php echo $dataa["app"];
                                                        ?>
                                                        </option>
                                                    <?php
                                                    endwhile;
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="textareaa form-body" >
                                                <div class="form-content formb ">
                                                    <input class="form-controll" list="keysss" type="number" name="numberr" placeholder="Enter The Number Of Keys" style="border: 3px solid #0d6efd; padding-right:0%; text-align:center; " required>
                                                    <datalist id="keysss" style="display: none;">
                                                        <option value="1">
                                                        <option value="5">
                                                        <option value="10">
                                                        <option value="15">
                                                        <option value="50">
                                                    </datalist>
                                                </div>
                                                <div class="form-button mt-3">
                                                    <button id="submit" type="submit" class="btn btn-primary stretch" style="width: 100%;">Create</button>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>


<?php
include '../assets/footer.php'
?>