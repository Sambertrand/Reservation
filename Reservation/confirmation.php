<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">	
	<title>
		Reservation
	</title>
</head>
<body>
	<h1>
		<b>RESERVATION</b>
	</h1>
	<p>
		Reservartion confirmed for $<?php echo $totalprice ?>
	</p>
	<form action="index.php" method= "POST"> 
		<input type="submit" value="Back to home"/> 
		<input type= "hidden"  name="page" value="destroyer">
	</form>
</body>
</html>