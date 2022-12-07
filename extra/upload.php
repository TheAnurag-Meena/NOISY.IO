<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "../database/db.php";
	$car = $_POST['pon'];

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: edit.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-").'.'.$img_ex_lc;
				$img_upload_path = '../upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "UPDATE `dataa`SET `image_url` = '".$new_img_name."' WHERE `id` = '".$car."'";
				//UPDATE $db SET `hwid` = '".$hwid."' WHERE `keyy` = '".$key."'"
				mysqli_query($con, $sql);
				header("Location: ../Pages/application.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../Pages/application.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../Pages/application.php?error=$em");
	}

}else {
	header("Location: ../Pages/application.php");
}