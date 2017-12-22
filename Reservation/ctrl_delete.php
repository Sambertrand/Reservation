<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";
$ID = $_POST['ID'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

//deleting the ID
$sql = "DELETE FROM infos WHERE id=$ID";

$conn->query($sql);
$conn->close();

echo 'deleted';

include 'ctrl_admin.php';
?>