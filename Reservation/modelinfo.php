<?php

class info
{
	private $destination = "";
	private $numberPlaces= 0;
	private $assurance= "on";

	public function __construct()
	{
	}

	public function GetDestination()
	{
		return $this->destination;
	}

	public function GetNumberPlaces()
	{
		return $this->numberPlaces;
	}

	public function Getassurance()
	{
		settype($assurance , "integer");
		return $this->assurance;
	}

	public function SetDestination($dest)
	{
		$this->destination = $dest;
	}

	public function SetNumberPlaces($nbrP)
	{
		$this->numberPlaces = $nbrP;
	}

	public function SetAssurance($Assur)
	{
		$this->assurance = $Assur;
	}
}
	?>