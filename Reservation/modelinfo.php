<?php

class info
{
	private $destination;
	private $numbrePlaces;
	private $assurance;

	public function __construct()
	{
		$this->destination = "";
		$this->numberPlaces = 0;
		$this->assurance = "on";
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

	public function SetNumbrePlaces($nbrP)
	{
		$this->numberPlaces = $nbrP;
	}

	public function SetAssurance($Assur)
	{
		$this->assurance = $Assur;
	}
}
	?>