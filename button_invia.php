<?php
$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
$sql = "INSERT INTO dbasl (NOME, COGNOME, EMAIL)
VALUES ($Nome, $Cognome, $Email)";
    $conn->close();
    ?>
