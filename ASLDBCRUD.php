

<?php


$servername = "localhost";
$username = "root";
$password="";

$conn = mysqli_connect($servername, $username, $password);
$sql = "SELECT id, nome, cognome FROM DBASL";
$result = $conn->query($sql);