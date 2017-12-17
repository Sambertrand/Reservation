<?php
require_once('modelperson.php');
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);

if (isset($person))
{
	$person = $listPerson[$pointer];
}
else
{
	$pointer = 0;
	$person = new Person();
}

$_SESSION['pointer']= serialize($pointer);
	
$s = intval($infos->GetNumberPlaces());

if ($pointer < $s)
{
	include 'info.php';
}
else
	{
	$kids = 0 ;
	$adults = 0 ;
	$adultcheck = false;
	$gotassurance = 0;

	if ($infos->GetAssurance())
	{
		$gotassurance = 1;
	}


	foreach ($listPerson as $person)
	{
		if (intval($person->GetAge()) >= 18)
		{
			$adultcheck = true;
		}

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
	$_SESSION['totalprice']= serialize($totalprice);
	if ($adultcheck)
	{
		include 'summary.php';
	}
	else
	{
		echo'at least one person has to be over 18';
		include 'ctrl_back.php';

	}
	
	}
?>