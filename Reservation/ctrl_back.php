<?php
//controller for the back button
$listPerson = unserialize($_SESSION['listPerson']);
$pointer = unserialize($_SESSION['pointer']);
$infos = unserialize($_SESSION['infos']);
if ($pointer == 1)
{
	include'ctrl_reservation.php';
}
else
{
	$back = true;
	$pointer = $pointer-1;
	Include'ctrl_info.php';
}
?>