<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
	
function myLoad($class)
{
		include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');

	//added the path for the classes
//include_once("classes/users.class.php");
//include_once("classes/registereduser.class.php");  
//include_once("classes/adminusers.class.php");

$myRegUser = new registereduser("Regular User","mnastal");
$myAdminUser= new adminuser("Administrator","djones");



$myRegUser->user_type=1;
$myRegUser->first_name="Melanie";
$myRegUser->last_name="Nastal";
$myRegUser->email_address="mnastal@email.com";

$myAdminUser->user_type=2;
$myAdminUser->first_name="Denise";
$myAdminUser->last_name="Jones";
$myAdminUser->email_address="djones@email.com";

$resultCal=adminuser::getCalc(4,10);
echo '<hr/>';
echo $resultCal. '<hr/>';

echo "User Level: ".$myRegUser->user_level."<br/>";
echo "User ID: ".$myRegUser->user_id."<br/>";
echo "User Type: ".$myRegUser->user_type."<br/>";
echo "First Name: ".$myRegUser->first_name."<br/>";
echo "Last Name: ".$myRegUser->last_name."<br/>";
echo "Email Address: ".$myRegUser->email_address."<br/>";
echo "<hr>";
echo "User Level: ".$myAdminUser->user_level."<br/>";
echo "User ID: ".$myAdminUser->user_id."<br/>";
echo "User Type: ".$myAdminUser->user_type."<br/>";
echo "First Name: ".$myAdminUser->first_name."<br/>";
echo "Last Name: ".$myAdminUser->last_name."<br/>";
echo "Email Address: ".$myAdminUser->email_address."<br/>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>I've Got A Lovely Bunch of Coconuts: Create Inventory</title>
<link type="text/css" rel="stylesheet" href="<?php echo URL_ROOT ?>/styles.css"/>
</head>

<body>
<a href="register.php">Register</a>




</body>
</html>
