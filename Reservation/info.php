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
		We need the information of every person:
	</p>
	<p>
		Person <?php echo $pointer + 1?>
	</p>
	<form action="index.php" method= "POST">  		
  		<Table>
  			<caption> Reservation form: </caption>
  			<TR>
  				<TH> First Name: </TH>
  				<TH> <input type="text" name="First_Name" value="<?php $person->GetFirstName() ?>"> </TH>
			</TR>
			<TR>
  				<TH> Last Name: </TH>
  				<TH> <input type="text" name="Last_Name" value="<?php $person->GetLastName() ?>"> </TH>
			</TR>
			<TR>
				<TH>Age: </TH>
				<TH> <input type="text" name="Age" value="<?php $person->GetAge()?>"> </TH>
  			</TR>
  		</Table>
  		<br>
  		<br>
	  	<input type="submit" value="Next step"> 
		<input type= "hidden"  name="page" value="ctrl_person">
	</form>	
	<form action="index.php" method= "POST">
		<input type="submit" value="back">
		<input type= "hidden"  name="page" value="ctrl_back">
	</form>
	<form action="index.php" method= "POST">
		<input type="submit" value="delete reservation and go back home">
		<input type= "hidden"  name="page" value="destroyer">
	</form>
</body>
</html>