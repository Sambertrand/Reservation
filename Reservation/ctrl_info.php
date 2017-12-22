<?php
require_once('modelperson.php');
$listPerson = unserialize($_SESSION['listPerson']);
$infos = unserialize($_SESSION['infos']);

//sets up the pointer
//the pointer points to which passenger we are at (+1 when going forward, -1 when going backwards)
if (!isset($pointer))
{
	$back = false;
	$pointer = 1;
}

$_SESSION['pointer']= serialize($pointer);

//continues showing the info view while the pointer isn't at the number of places needed	
if ($pointer <= intval($infos->GetNumberPlaces()))
{
	echo $pointer;
	if($back)
	{
		$person = $listPerson[$pointer];
	}
	else
	{

		if(isset($listPerson[$pointer]))
		{
			$person = $listPerson[$pointer];
		}
		else
		{
			$person = new Person();
		}
	}
	include 'info.php';
}
//when the number of places reached it calculated thde totalprice
//checks if there is an adult and shows the summary
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
	$_SESSION['listPerson']= serialize($listPerson);
	if ($adultcheck)
	{

		include 'summary.php';
	}
	
	//no adult,  it goes back
	else
	{
		echo'at least one person has to be over 18';
		unset($person); 
		include 'ctrl_back.php';

	}
	
	}
?>