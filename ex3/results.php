<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
	
function myLoad($class)
{
		include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');

$firstName= $_POST["firstname"];
$lastName= $_POST["lastname"];
$Email = $_POST["email"];


$regUser= new registereduser('regular','newuser');


if($regUser instanceof registereduser)
{
	echo "First Name: " .$firstName. "<br/>";
	echo "Last Name: " .$lastName. "<br/>";
	echo "Email: " .$Email. "<br/>";
}
else
{
	echo "This is not a regular user.";
}
?>