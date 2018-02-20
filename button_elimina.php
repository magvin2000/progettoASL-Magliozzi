<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_GET['Id'];
$conn =  new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM dbasl WHERE ID='$id'";
if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('location: http://localhost:63342/progettoASL-MagliozziCassin/ASLDBCRUD.php');
$conn->close();
