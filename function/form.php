<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Contact Form </title>
</head>
<body> 
	<div class="container">
		<?php 
		if(isset($_POST['submit_form']))
			{ 
          $name=$_POST['name']; 
       $email=$_POST['email']; 
        $msg=$_POST['msg']; 
        $hide=2;
        //your insert query or mail function 
        echo '<div class="success">Thank you <strong>'.$name.',</strong> Your message has been sent ... </div> '; 
			}
		?>
		<?php if(!isset($hide)) { ?>
			<h2>Contact Form  &#9971;</h2>
	<form action="" method="POST">
		<label> Name </label>
		<input type="text" name="name" class="form-control" required>
		<label>Email </label>
		<input type="email" name="email" class="form-control" required>
		<label> Message </label>
		<textarea name="msg" cols="10" rows="5"  class="form-control" required></textarea> 
		<input type="submit" name="submit_form" value="Send" class="btn-primary">
</form>
<?php }?> 
</div>
</body>
</html>