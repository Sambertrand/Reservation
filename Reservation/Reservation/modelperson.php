<?php

class Person
{
	private $firstName;
	private $lastName;
	private $age;

	public function __construct()
	{
		$this->firstName = "";
		$this->lastName = 0;
		$this->age = 0;
	}

	public function GetFirstName()
	{
		return $this->firstName;
	}

	public function GetLastName()
	{
		return $this->lastName;
	}

	public function GetAge()
	{
		return $this->age;
	}

	public function SetFirstName($first)
	{
		$this->firstName = $first;
	}

	public function SetLastName($last)
	{
		$this->lastName = $last;
	}

	public function SetAge($A)
	{
		$this->age = $A;
	}
}
	?>