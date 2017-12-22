<?php
require_once('modelperson.php');
require_once('modelinfo.php');
$infos = unserialize($_SESSION['infos']);
$listPerson = unserialize($_SESSION['listPerson']);
$pointer = unserialize($_SESSION['pointer']);

$ID = $_POST['ID'];
$listPerson = [];
$infos = new info ();
$pointer = 1;
$totalprice = 0;

//getting the info from the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT infos.Destination, infos.Places, infos.Price, infos.Assurance, infos.id, 
				persons.Lastname, persons.Firstname, persons.Age
        FROM infos
        INNER JOIN persons 
        WHERE persons.id_infos = infos.id && persons.id_infos = $ID";

$toModify = $conn->query($sql);


// initializing the informations
$i=1;
while ($row = $toModify->fetch_assoc())
{
	$infos->SetDestination($row['Destination']);
	$infos->SetNumberPlaces($row['Places']);
	
	if ($row['Assurance'] == 'Yes')
	{
		$infos->SetAssurance(true);
	}

	$pointer = intval($infos->GetNumberPlaces());
	$totalprice = intval($row['Price']);

	$person = new person();
	$person->SetFirstName($row['Firstname']);
	$person->SetLastName($row['Lastname']);
	$person->SetAge($row['Age']);
	$listPerson[$i] = $person; 
	$i = $i + 1;
}

$_SESSION['infos']= serialize($infos);
$_SESSION['totalprice']= serialize($totalprice);
$_SESSION['listPerson']= serialize($listPerson);
$_SESSION['pointer']= serialize($pointer);

//deleting after setting up the changemens to not have double informations
$sql = "DELETE FROM infos WHERE id=$ID";
$conn->query($sql);
$conn->close();

//showing summary to modify by using back
include 'summary.php'
?>