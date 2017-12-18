<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

$save_ID = 0;
$save_line = array();
$display = "";

//conneciton to database
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}

$selected = "SELECT infos.id, infos.Destination, infos.Places, infos.Price,
                infos.Assurance, persons.Lastname, persons.Firstname, persons.Age
            FROM infos
            INNER JOIN persons 
            WHERE persons.id_infos = infos.id";
$result = $connection->query($selected);
    
    
//$display will be the table of the database
//firstly adding the columns
$display .= "</br><table class='table table-responsive'><tr>";
while ($info=$result->fetch_field())
{
    $display .= "<td>".$info->name."</td>";
}
$display .=  "<td>"."Change"."</td>";
$display .=  "<td>"."Delete"."</td>";
$display .=  "</tr>";
    
//secondly adding the informations
while ($line=$result->fetch_assoc())
{
	$display .= "<tr>";
        
   	//new reservation
    if ($line['id'] != $save_ID)
    {
        $save_ID = $line['id'];
        $save_line[0] = $line;
        foreach ($line as $col_value)
        {
            $display .= "<td>" . $col_value . "</td>";
        }
        $display .= "<td>";
        $display .= "<form method='post' action='index.php'>";
        $display .= "<input type='hidden' name='page' value='controller_displaydatabd'/>";
        $display .= "<input type='hidden' name='VolID' value='".$line['id']."'/>";
        $display .= "<input type='submit' class='btn btn-primary  btn-sm' value='Modifier'/>";
        $display .= "</form>";
        $display .= "</td>";
        $display .= "<td>";
        $display .= "<form method='post' action='index.php'>";
        $display .= "<input type='hidden' name='page' value='controller_suppdatadb'/>";
        $display .= "<input type='hidden' name='VolID' value='".$line['id']."'/>";
        $display .= "<input type='submit' class='btn btn-primary  btn-sm' value='Supprimer'/>";
        $display .= "</form>";
        $display .= "</td>";
        $display .= "</tr>";
    } 
    //only a new person not a new reservation       
    else 
    {
        foreach($line as $col_value)
        {
            if ($col_value != $line['Age'] && in_array($col_value, $save_line[0]))
            {
                $display .= "<td>" . "</td>";
            }
            else
            {
                $display .= "<td>" . $col_value . "</td>";
            }
        }            
        $display .= "</tr>";            
    }       
    
}
$display .= "</table>";
$connection->close();
include 'admin.php';
?>