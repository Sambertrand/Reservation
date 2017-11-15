<?php
$infos = unserialize($_SESSION['infos']);
$destination = $_POST["Destination"];
$numbrePlaces = $_POST["Number_of_Places"];
$assurance =  !empty($_POST["Assurance"]);
$infos->SetDestination($destination);
$infos->SetNumbrePlaces($numbrePlaces);
$infos->SetAssurance($assurance);
include 'info_template.php';
$n = 1;
while ($n <= $numbrePlaces)
{
	include 'info.php';
	$n++;
}

	?>
