<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";
$ID = $_POST['ID'];

// connection
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
} 

//deleting the ID
$sql = "DELETE FROM infos WHERE id=$ID";

$connection->query($sql);
$connection->close();

echo 'deleted';

include 'ctrl_admin.php';
?>