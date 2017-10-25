<?php
include 'modelinfo.php';

$destination = $_POST["Destination"];
$numbrePlaces = $_POST["Number_of_Places"];
$assurance =  !empty($_POST["Assurance"]);
$infos = new info ($destination, $numbrePlaces, $assurance);
include 'info.php';
	?>
