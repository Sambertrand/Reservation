<?php
$infos = unserialize($_SESSION['infos']);
$backIsSet = 0;
var_dump($_POST);

if(isset($_POST["backIsSet"]))
{
	$backIsSet = intval($_POST["backIsSet"]);
}
if (isset($_POST["Destination"])) 
	{
		$infos->SetDestination($_POST["Destination"]);
	}
if(isset($_POST["Number_of_Places"])) 
	{
		$numberPlaces = $_POST["Number_of_Places"];
		$infos->SetNumberPlaces($numberPlaces);
	}
$infos->SetAssurance(isset($_POST["Assurance"]));

$_SESSION['infos']= serialize($infos);

if ($backIsSet == 0)
{
	if($infos->GetDestination() != "")
	{
		include 'ctrl_info.php';
	}
	else
	{
		include 'reservation.php';
	}

}
else
{

	if($backIsSet == 1)
	{
		include'reservation.php';
	}
	else
	{
		include 'ctrl_info.php';
	}

}

?>