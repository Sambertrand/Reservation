<?php
$infos = unserialize($_SESSION['infos']);
$numberPlaces = 0;

if (isset($_POST["Destination"])) 
	{
		$infos->SetDestination($_POST["Destination"]);
	}
if(isset($_POST["Number_of_Places"]) && (1 <= intval($_POST["Number_of_Places"])) && (intval($_POST["Number_of_Places"]) <= 10)) 
	{
		$numberPlaces = $_POST["Number_of_Places"];
		$infos->SetNumberPlaces($numberPlaces);
	}
else
{
	if (isset($_POST["Number_of_Places"]))
	{
		echo' choose between 1 and 10 places';
	}

}
$infos->SetAssurance(isset($_POST["Assurance"]));

$_SESSION['infos']= serialize($infos);

if($infos->GetDestination() != "" && intval($numberPlaces) != 0)
{
	include 'ctrl_info.php';
}
else
{
	include 'reservation.php';
}

?>