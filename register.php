<?php
	session_start();
	include('../dbcon.php');

	if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2'] && !empty($_POST['name']))) {
		$uname = $_POST['uname']; 
		$name = $_POST['name'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); //Hashing passwords is important
		$pass2 = $_POST['pass2'];


		if(passMatch()){
			$sql = "INSERT INTO `unixverse_users` (`uname`, `name`, `pass`) VALUES (?, ?, ?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sss", $uname, $name, $pass);
			$stmt->execute();

			header("Location: index.php?message='Connection success'");
		} else {
			die("Passwords are not matching");
		}
	}

	// Here we are making sure that the user has entered identical passwords
	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Register</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="register-form">
		<h2> We are so excited you've decided to join us! </h2>
		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div>
				User Name:
				<input type="text" name="uname" size="30" />
			</div>
			<div>
				Name:
				<input type="text" name="name" size="30" />
			</div>
			<div>
				Password:
				<input type="password" name="pass" size="30" />
			</div>
			<div>
				Password (again):
				<input type="password" name="pass2" size="30" />
			</div>
			<div class="reg-buttons">
				<input type="reset" value="Reset Form" />
				<input type="submit" value="Submit Form" />
				<br>
				<input type="button" value="Home" onclick="window.location='index.php'" />
			</div>	
		</form>
	</div>
</body>
</html>
