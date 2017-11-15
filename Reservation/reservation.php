<!DOCTYPE html>
<html>
<head>
	<title>
		Réservation	
	</title>
</head>
<body>
	<h1>
		<b>RESERVATION</b>
	</h1>
	<p>
		The price is 10$ under 12 years old and 15$ above.
	</p>
	<p>
		The Cancellation price is 20$ no matter the number of passengers
	</p>
	<form action="index.php" method= "POST">  		
  		<Table>
  			<caption> Reservation form: </caption>
  			<TR>
  				<TH>Destination: </TH>
  				<TH>
  					<SELECT name="Destination" size="1">
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
				<TH> <input type="text" name="Number_of_Places"> </TH>
  			</TR>
  			<TR>
  				<TH> Cancellation assurance</TH>
  				<TH> <input type="checkbox" name="Assurance" <checked></TH>
  		</Table>
  		<br>
  		<br>
	  	<input type="submit" value="Next step"/> 
	   	<!-- <input type="submit" value="annuler la réservation"/> -->
		<input type= "hidden"  name="page" value="ctrl_info">
	</form>
</body>
</html>