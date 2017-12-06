<?php
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);

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
	}
?>