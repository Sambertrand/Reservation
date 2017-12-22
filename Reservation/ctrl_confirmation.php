<?php 
//adding information to the database
require_once('modelperson.php');
$totalprice = unserialize($_SESSION['totalprice']); 
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

//conneciton to database
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
} 

//inserting in the data base 
$destination = $infos->GetDestination();
$Nplaces = $infos->GetNumberPlaces();
$assurancecCheck = $infos->GetAssurance();
$assurance = "No";

if($assurancecCheck)
{
	$assurance = "Yes";
}

$add ="INSERT INTO infos (Destination, Places, Price, Assurance)
		VALUES ('" . $destination . "','". $Nplaces . "','" . $totalprice . "','". $assurance . "')";
$connection->query($add);
$id_infos = $connection->insert_id;

foreach ($listPerson as $Person)
{
	$lastname = $Person->GetLastName();
	$firstname = $Person->GetFirstName();
	$age = $Person->GetAge();
	$add = "INSERT INTO persons (id_infos,Lastname, Firstname, Age)
	        VALUES ('" . $id_infos. "','" .  $lastname . "','". $firstname . "','". $age . "')";
	$connection->query($add);
}
//closing conection
$connection->close();

include 'confirmation.php'
?>