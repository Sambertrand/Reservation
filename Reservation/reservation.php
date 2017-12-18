<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>
		Réservation	
	</title>
</head>
<body>
	<h1>
		<b>RESERVATION</b>
	</h1>
	<p>
		The price is $10 under 12 years old and $15 above.
	</p>
	<p>
		The Cancellation price is $20 no matter the number of passengers
	</p>
	<form action="index.php" method= "POST">  		
  		<Table>
  			<caption> Reservation form: </caption>
  			<TR>
  				<TH>Destination: </TH>
  				<TH>
  					<SELECT name="Destination" size="1">
  						<OPTION selected="selected"><?php echo $infos->GetDestination() ?> </OPTION>
						<OPTION>Berlin
						<OPTION>Brussels
						<OPTION>Madrid
						<OPTION>Paris
						<OPTION>Vienna
					</SELECT>
				</TH>
			</TR>
			<TR>
				<TH>Numbre of places: </TH>
				<TH> <input type="text" name="Number_of_Places" value="<?php echo $infos->GetNumberPlaces() ?>"> </TH>
  			</TR>
  			<TR>
  				<TH> Cancellation assurance</TH>
  				<TH> <input type="checkbox" name="Assurance" value="<?php echo $infos->GetAssurance() ?>"></TH>
  		</Table>
  		<br>
  		<br>
	  	<input type="submit" value="Next step">
		<input type= "hidden"  name="page" value="ctrl_reservation">
	</form>
	<form action="index.php" method= "POST">
		<input type="submit" value="delete reservation and go back home">
		<input type= "hidden"  name="page" value="destroyer">
	</form>
	<form action="index.php" method= "POST">
		<input type="submit" value="admin only">
		<input type= "hidden"  name="page" value="ctrl_admin">
	</form>
</body>
</html>