<?php
require_once('modelperson.php');

$listPerson = unserialize($_SESSION['listPerson']);
$person = new Person();

if (isset($_POST["First_Name"])) 
	{
		$firstName = $_POST["First_Name"];
		$person->SetFirstName($firstName);
	}
if (isset($_POST["Last_Name"])) 
	{
		$lastName = $_POST["Last_Name"];
		$person->SetLastName($lastName);
	}
if (isset($_POST["Age"])) 
	{
		$age = $_POST["Age"];
		$person->SetAge($age);
	}
$x = count($listPerson) + 1;
$listPerson[$x] = $person; 
$_SESSION['listPerson']= serialize($listPerson);

include 'ctrl_info.php';
?>