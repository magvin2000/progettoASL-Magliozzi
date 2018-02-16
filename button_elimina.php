<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_POST['Id'];

$conn = new mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione non stabilita: " . mysqli_connect_error());
}

$sql = "DELETE FROM dbasl WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
    echo "Riga eliminata";
} else {
    echo "Errore nell'eliminazione: " . $conn->error;
}

$conn->close();