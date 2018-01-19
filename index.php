<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task3</title>
</head>
<body>
	<h1>Welcome to e-Mania online shop</h1>
	<h3>Enter your credentials to continue</h3>
	<p>Hint &#8594; username is root, pass is 12345</p>
	<?php
	$user_info = array("username"=>"root", "pass"=>"12345");
	//var_dump($user_info);
	?>
<form method="post" action="">
	<label for="uname">Enter Username</label>
	<input id="uname" type="text" name="username">
	<label for="pass"> Enter Password</label>
	<input id="pass" type="password" name="pass">
	<input type="submit" name="Submit">
</form>	
	<?php
	if(!empty ($_POST['username']) && !empty ($_POST['pass'])){
		if( ($_POST['username'] === $user_info['username']) && ($_POST['pass'] === $user_info['pass'])){
			echo "<p>".'Welcome  '.$user_info['username']."</p>";
			session_start();
			$_SESSION['username'] = $user_info['username'];
			$_SESSION['pass'] = $user_info['pass'];	
			$_SESSION['loggeduser'] = $_POST['username'];
			$_SESSION['loggeduserpass'] = $_POST['pass'];
			//$_POST = array();
			header("Location: shop.php");
		}	
		else{
			echo "<p>".'Wrong username or password'."</p>";
			$_POST = array();
			session_start();
			$_SESSION['username'] = 1;
			$_SESSION['loggeduser'] = 2;

		}

	}

	?>
	
</body>
</html>