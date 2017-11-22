<?php
//Alors,  tu dois faire en sort que cette page fonctionne en revoyant summary quand tout les personnes sont crées.
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);
var_dump($infos);

$n = count($listPerson);
$s = $infos->GetNumberPlaces();

if ($n <= $s)
{
	include 'info.php';
}
else
{
	include 'summary.php';
}
?>