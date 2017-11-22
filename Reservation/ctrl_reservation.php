<?php
$infos = unserialize($_SESSION['infos']);
var_dump($_POST);

if (isset($_POST["Destination"])) 
	{
		$infos->SetDestination($_POST["Destination"]);
	}
if(isset($_POST["Number_of_Places"])) 
	{
		$numberPlaces = $_POST["Number_of_Places"];
		$infos->SetNumberPlaces($numberPlaces);
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

$_SESSION['infos']= serialize($infos);
?>