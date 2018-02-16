<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_POST['Id'];

$conn =  mysqli_connect($servername, $username, $password, $dbname);

$sql = "DELETE FROM dbasl WHERE ID = $id";

mysqli_query($conn, $sql);
header("location:http://localhost/progettoASL-MagliozziCassin/ASLDBCRUD.php");
$conn->close();