<?php
$infos = unserialize($_SESSION['infos']);
var_dump($infos);
if (isset($_POST["Destination"])) 
	{
		$destination = $_POST["Destination"];
		$infos->SetDestination($destination);
	}
if(isset($_POST["Number_of_Places"])) 
	{
		$numbrePlaces = $_POST["Number_of_Places"];
		$infos->SetNumbrePlaces($numbrePlaces);
	}
$assurance =  !empty($_POST["Assurance"]);
$infos->SetAssurance($assurance);

if($infos->GetDestination() != "")
{
	include 'ctrl_info.php';
}
else
{
include 'reservation.php';
}
?>