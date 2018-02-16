<?php

$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = new mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione non stabilita: " . mysqli_connect_error());
}

// aggiorna

if ($conn->query($sql) === TRUE) {
    echo "Riga aggiornata";
} else {
    echo "Errore nell'aggiornamento: " . $conn->error;
}

$conn->close();