<?php
//modifies the new person when next is clicked on the info page
require_once('modelperson.php');
$pointer = unserialize($_SESSION['pointer']);
$listPerson = unserialize($_SESSION['listPerson']);
$person = new Person();
$back = false;

if ( $_POST["First_Name"] != "" && $_POST["Last_Name"] != "" && is_numeric($_POST["Age"]))
{
	$firstName = $_POST["First_Name"];
	$person->SetFirstName($firstName);
	$lastName = $_POST["Last_Name"];
	$person->SetLastName($lastName);
	$age = $_POST["Age"];	
	$person->SetAge($age);
	$listPerson[$pointer] = $person; 
	$pointer = $pointer + 1;
	unset($person);
}
//ckecks for errors
else
{
	echo 'set all corectly (Age has to be a number)';
}

$_SESSION['listPerson']= serialize($listPerson);

include 'ctrl_info.php';
?>