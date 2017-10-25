<?php

class info
{
	private $destination = "";
	private $numbrePlaces = 0;
	private $assurance = false;

	public function __construct($destination, $numberPlaces, $assurance)
	{
		$this->destination = $destination;
		$this->numberPlaces = $numberPlaces;
		$this->assurance = $assurance;
	}

	public function getDestination()
	{
		return $this->destination;
	}

	public function getNumberPlaces()
	{
		return $this->numberPlaces;
	}

	public function getassurance()
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