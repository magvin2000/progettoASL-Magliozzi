<html
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>DATABASE</title>
</head>
<body>
<div>
    <form action="" method="get">
        <h2>Modifica i dati</h2>
        <input type="text" name="nome" placeholder="Nome" value="" required>
        <input type="text" name="cognome" placeholder="Cognome" value="" required>
        <input type="email" name="email" placeholder="Email" value="" required>
        <br>
        <input type="submit" value="Aggiungi" name="aggiungi">
    </form>
</div>
</body>

<?php

$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_POST['Id'];

$conn = new mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione non stabilita: " . mysqli_connect_error());
}

$sql = "UPDATE dbasl SET NOME=$Nome SET COGNOME=$Cognome SET EMAIL=$Email WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Riga aggiornata";
} else {
    echo "Errore nell'aggiornamento: " . $conn->error;
}

$conn->close();