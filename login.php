
<?php 
include"config.php";


if (isset($_POST['reg_submit'])) {
	$name = strip_tags($_POST['reg_name']);
	$em = strip_tags($_POST['reg_email']);
	if(filter_var($em, FILTER_VALIDATE_EMAIL)) {

      $em = filter_var($em, FILTER_VALIDATE_EMAIL);

      //Check if email already exists 
      $e_check = mysqli_query($con, "SELECT email FROM user WHERE email='$em'");

      //Count the number of rows returned
      $num_rows = mysqli_num_rows($e_check);

      if($num_rows > 0) {
        echo "Email already in use<br>";
      } else {
      	$password = md5($_POST['reg_password']);

	$query = mysqli_query($con, "INSERT INTO user Values('', '$em', '$password', '$name', 'no')");
	echo "Sucess";
      }

    }
    else {
      echo "Invalid email format<br>";
    }


	
}

if (isset($_POST['login_submit'])) {
	
	$emails = strip_tags($_POST['log_email']);
	$passwords = md5($_POST['log_password']);
$check_qu = mysqli_query($con, "SELECT * from user Where email='$emails' AND password='$passwords' ");
$qury_q = mysqli_num_rows($check_qu);
if($qury_q == 1){
	$_SESSION['id'] = $id;
		header("Location: index.php");

		exit();
}
else {
	echo "Sorry";
}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="theme-color" content="#131c3e">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Please login first</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
	<div class="body">
        

	<br>
	<br>
<div class="Login_colomn">
	<div class="column">
<form action="" method="POST" style="padding: 13px;">
	
		<div class="login_column">
	<div class="log_email">
		<label>Email</label>
		<input type="email" name="log_email" class="log_email" required>
	</div>

	<div class="log_password">
		<label>Password</label>
		<input type="password" name="log_password" class="log_password" required>
	</div>
	<div class="submit_btn">
		<button type="submit" name="login_submit">Login</button>
	</div>
</div>
</form>
	</div>

	
	<div class="column">
		<form action="" method="POST" style="padding: 13px;">
	<div class="reg_column">
		<div class="sign_name">
			<label>Signup Name</label>
			<input type="name" name="reg_name" class="reg_name" required>
		</div>
		<div class="sign_email">
			<label>Signup Email</label>
			<input type="email" name="reg_email" class="reg_email" required >

		</div>
		<div class="sign_password">
			<label>Signup Password</label>
			<input type="password" name="reg_password" class="reg_password" required>
			
		</div>

		<div class="signup_submit">
			<button type="submit" class="reg_submit" name="reg_submit">Signup</button>
		</div>
		</div>
	</div>



</form>
</div>
</div>



</body>
</html>