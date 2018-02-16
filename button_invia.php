<?php
$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$ID=1;
// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO dbasl (NOME, COGNOME, EMAIL) VALUES ($ID,$Nome, $Cognome, $Email)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$conn->close();
