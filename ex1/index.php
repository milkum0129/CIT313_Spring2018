<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<?php
include('includes/header.inc.php');
?>
<?php

//Create array
$myPreferences=array('name'=> 'Melanie', 'favColor' => 'blue', 'favMovie' => 'Marvel Avengers',
'favBook' => 'Business Model Generation', 'favWebsite' => 'Nike');


//Get name from array
$myFavorites = $myPreferences['name'];

//Print name
echo "<h1>My name is $myFavorites</h1>";


//Function to loop through array and print all values except name

function my_pref($array)
{
echo "<ul>";
foreach($array as $item)
	{
		echo "<li>$item</li>";
	}
echo "</ul>";
}		
$myArray=$myPreferences;
unset($myArray['name']);
my_pref($myArray);
?>
<?php
include('includes/footer.inc.php');
?>