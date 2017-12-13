<?php
require_once('modelperson.php');
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);
$n = count($listPerson);


if (isset($_POST["backIsSet"]))
{
	if ($backIsSet == 0)
	{
		$person = new Person();
	}
	else
	{
		$n = $backIsSet - 1;
		$person = $listPerson[$n];
	}

} 
else
{
	$person = new Person();
}
	
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
	$_SESSION['totalprice']= serialize($totalprice);

	include 'summary.php';
	}
?>