<?php
require_once('modelperson.php');

$listPerson = unserialize($_SESSION['listPerson']);
$person = new Person();

if ( $_POST["First_Name"] != "" && $_POST["Last_Name"] != "" && $_POST["Age"] != "")
{
	$firstName = $_POST["First_Name"];
	$person->SetFirstName($firstName);
	$lastName = $_POST["Last_Name"];
	$person->SetLastName($lastName);
	$age = $_POST["Age"];
	
	$person->SetAge($age);
	$x = count($listPerson) + 1;
	$listPerson[$x] = $person; 
}
else
{
	echo 'ERROR';
}

$_SESSION['listPerson']= serialize($listPerson);

include 'ctrl_info.php';
?>