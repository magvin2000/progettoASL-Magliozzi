<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$id = $_GET['Id'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM dbasl WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location:http://localhost:63342/progettoASL-MagliozziCassin/ASLDBCRUD.php?_ijt=p3j51hss07g2l97so5nkccigov");