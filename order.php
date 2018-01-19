<?php
session_start();
if( ($_SESSION['loggeduser'] === $_SESSION['username']) && ($_SESSION['loggeduserpass'] === $_SESSION['pass'])){
//define variables and assign values from global arrays
$quantity_1 = $_GET['quantity_1'];
$quantity_2 = $_GET['quantity_2'];
$quantity_3 = $_GET['quantity_3'];
$quantity_4 = $_GET['quantity_4'];
$quantity_5 = $_GET['quantity_5'];
$total_1 = 0;
$total_2 = 0;
$total_3 = 0;
$total_4 = 0;
$total_5 = 0;
$items = array("Chocolate"=>"3", "Juice"=>"2", "Waffer"=>"1", "Pie"=>"5", "Cake"=>"7.2" );
$price_1 = $items['Chocolate'];
$price_2 = $items['Juice'];
$price_3 = $items['Waffer'];
$price_4 = $items['Pie'];
$price_5 = $items['Cake'];
//order details
echo "<p>".'Your order:'."</p>";
echo "<ol>";
if ($quantity_1>0){
	echo "<li>".'Chocolate '."$quantity_1".' pieces x '.$price_1.' lv for '.($price_1*$quantity_1).' lv';
}
else{
	$quantity_1 = 0;
}
if ($quantity_2>0){
	echo "<li>".'Juice '."$quantity_2".' pieces x '.$price_2.' lv for '.($price_2*$quantity_2).' lv';
}
else{
	$quantity_2 = 0;
}
if ($quantity_3>0){
	echo "<li>".'Waffer '."$quantity_3".' pieces x '.$price_3.' lv for '.($price_3*$quantity_3).' lv';
}
else{
	$quantity_3 = 0;
}
if ($quantity_4>0){
	echo "<li>".'Pie '."$quantity_4".' pieces x '.$price_4.' lv for '.($price_4*$quantity_4).' lv';
}
else{
	$quantity_4 = 0;
}
if ($quantity_5>0){
	echo "<li>".'Cake '."$quantity_5".' pieces x '.$price_5.' lv for '.($price_5*$quantity_5).' lv';
}
else{
	$quantity_5 = 0;
}
$total=(($price_1*$quantity_1)+($price_2*$quantity_2)+($price_3*$quantity_3)+($price_4*$quantity_4)+($price_5*$quantity_5));
echo "<p>".'TOTAL '."$total".' lv'."</p>";
$_SESSION['total']=$total;
echo 'Please enter your credit card details to proceed';
echo "<form method=\"post\" action=\"final.php\">";
	echo "<p>"."<label for=\"card\">Your credit card number</label>"."</p>";
	echo "<input id=\"card\" type=\"textbox\" name=\"card_id\" required>";
	echo "<p>"."<label for=\"balance\">Enter your account balance</label>"."</p>";
	echo "<input id=\"balance\" type=\"textbox\" name=\"balance\" required>";
	echo "<p>"."<input type=\"submit\" name=\"Submit\">";
echo "</form>";
}
else{
	echo "<p>".'Wrong username or password'."</p>";
	echo "<a href=\"index.php\">Back to homepage</a>";
	session_unset();
	session_destroy();
	}





