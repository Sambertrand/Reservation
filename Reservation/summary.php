<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		table, th, td
		{
			border: 1px solid black;
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
		The total price is <?php echo $totalprice ?>$
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
	while ($i <= $n)
	{
		$person = $listPerson[$i];
		include 'table1.php';
		$i = $i + 1;
		
	}
	?>
	<br>
	<form action="index.php" method= "POST"> 
		<input type="submit" value="Confirm"/> 
		<!-- <input type="submit" value="annuler la réservation"/> -->
		<input type= "hidden"  name="page" value="Confirmation">
	</form>
</body>
</html>