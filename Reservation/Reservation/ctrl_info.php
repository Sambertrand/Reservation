<?php
//Alors,  tu dois faire en sort que cette page fonctionne en revoyant summary quand tout les personnes sont crées.
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);
var_dump($infos);
var_dump($listPerson);

$n = count($listPerson);
$s = intval($infos->GetNumberPlaces());

if ($n < $s)
{
	include 'info.php';
}
else
{
	$kids = 0 ;
	$adults = 0 ;
	$gotassurance = 0;

	if ($infos->GetAssurance())
	{
		$gotassurance = 1;
	}

	foreach ($listPerson as $person)
	{
		if (intval($person->GetAge()) < 12)
			{
				$kids = $kids + 1;
			}
		else
		{
			$adults = $adults + 1;
		}

	}	
	$totalprice = ($kids*10) + ($adults*15) + ($gotassurance*20);
	
	include 'summary.php';
	foreach ($listPerson as $person)
	{
		include 'table1.php';
	}
}
?>