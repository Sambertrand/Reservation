<?php
require_once('modelperson.php');
$pointer = unserialize($_SESSION['pointer']);
$listPerson = unserialize($_SESSION['listPerson']);
$person = $person = new Person();

if ( $_POST["First_Name"] != "" && $_POST["Last_Name"] != "" && is_numeric($_POST["Age"]))
{
	$firstName = $_POST["First_Name"];
	$person->SetFirstName($firstName);
	$lastName = $_POST["Last_Name"];
	$person->SetLastName($lastName);
	$age = $_POST["Age"];	
	$person->SetAge($age);
	$pointer = $pointer + 1;
	$listPerson[$pointer] = $person; 
}
else
{
	echo 'set all corectly (Age has to be a number)';
}

$_SESSION['listPerson']= serialize($listPerson);
$_SESSION['Person']= serialize($person);

include 'ctrl_info.php';
?>