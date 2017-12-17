<?php
$listPerson = unserialize($_SESSION['listPerson']);
$pointer = unserialize($_SESSION['pointer']);
echo count($listPerson);
echo $pointer;
if ($pointer == 0)
{
	include'ctrl_reservation.php';
}
else
{
	$pointer = $pointer-1;
	Include'ctrl_info.php';
}
?>