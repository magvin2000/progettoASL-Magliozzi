<?php
$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO dbasl (NOME, COGNOME, EMAIL) VALUES ('$Nome', '$Cognome', '$Email')";

mysqli_query($conn, $sql);

header("location:http://localhost/progettoASL-MagliozziCassin/ASLDBCRUD.php");
$conn->close();