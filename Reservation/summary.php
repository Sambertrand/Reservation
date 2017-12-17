<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		table, th, td
		{
			width: 220px;
		}
	</style>
	<title>
		Confirmation
	</title>
</head>
<body>
	<h1>
		<b>RESERVATION</b>
	</h1>
	<p>
		The total price is $<?php echo $totalprice ?>
	</p>
	<p>
		You are going to <?php echo $infos->GetDestination() ?>
	</p>
	<p>
		insurance: <?php 
			if ($infos->GetAssurance()) 
			{
				echo "Yes";
			} 
			else
			{
				echo "No";
			}
			?>
	</p>
	<p>
		Here is a summary of the people in the Reservation:
	</p>
	<?php
	$i = 1;
	while ($i <= count($listPerson))
	{
		$person = $listPerson[$i];
		include 'table1.php';
		$i = $i + 1;
		
	}
	?>
	<br>
	<form action="index.php" method= "POST"> 
		<input type="submit" value="Confirm"/> 
		<input type= "hidden"  name="page" value="ctrl_Confirmation">
	</form>
	<form action="index.php" method= "POST">
		<input type="submit" value="back">
		<input type= "hidden"  name="page" value="ctrl_back">
	</form>
	<form action="index.php" method= "POST">
		<input type="submit" value="delete reservation and go back home"/>
		<input type= "hidden"  name="page" value="destroyer">
	</form>
</body>
</html>