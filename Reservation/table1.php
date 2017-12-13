<!DOCTYPE html>
<html>
<body>
	<p>
		Person number <?php echo $i ?>
	</p>
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td><?php echo $person->GetFirstName(); ?></td>
    <td><?php echo $person->GetLastName(); ?></td>
    <td><?php echo $person->GetAge(); ?></td>
  </tr>
  </table>
  <br>
</body>
</html>