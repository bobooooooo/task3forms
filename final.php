<?php
session_start();
if( ($_SESSION['loggeduser'] === $_SESSION['username']) && ($_SESSION['loggeduserpass'] === $_SESSION['pass'])){
	echo "Your order is sent";
	//Bill and amount after payment
	echo "<p>".'Your bill is '.$_SESSION['total'].' Leva'."</p>";
	echo "<p>".'Available amount after payment is '.(($_POST['balance'])-($_SESSION['total'])).' Leva'."</p>";
	echo "Bye!";
	echo "<p>"."<a href=\"index.php\">Back to homepage</a>"."</p>";


}
else{
	echo "<p>".'Wrong username or password'."</p>";
	echo "<a href=\"index.php\">Back to homepage</a>";
	session_unset();
	session_destroy();
	}