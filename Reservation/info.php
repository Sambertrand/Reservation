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
		We need the information of every person:
	</p>
	<p>
		Person <?php echo $n?>
	</p>
	<form action="index.php" method= "POST">  		
  		<Table>
  			<caption> Reservation form: </caption>
  			<TR>
  				<TH> First Name: </TH>
  				<TH> <input type="text" name="First_Name"> </TH>
			</TR>
			<TR>
  				<TH> Last Name: </TH>
  				<TH> <input type="text" name="Last_Name"> </TH>
			</TR>
			<TR>
				<TH>Age: </TH>
				<TH> <input type="text" name="Age"> </TH>
  			</TR>
  		</Table>
  		<br>
  		<br>
	  	<input type="submit" value="Next step"/> 
	   	<!-- <input type="submit" value="annuler la réservation"/> -->
		<input type= "hidden"  name="page" value="ctrl_info">
	</form>
</body>
</html>