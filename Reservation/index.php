<?php
//Router
require_once('modelinfo.php');
session_start();
if (!empty($_POST["page"]) && is_file($_POST["page"].".php"))
{
   	include $_POST["page"].".php";
}	
else
{	
	$listPerson = [];
	$infos = new info ();
	$_SESSION['infos']= serialize($infos);
	$_SESSION['listPerson']= serialize($listPerson);
   	include "ctrl_reservation.php";
}
?>