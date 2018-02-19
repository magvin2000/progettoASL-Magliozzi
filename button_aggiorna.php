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
        <h2>Modifica i dati</h2>
<?php

$Nome=$_GET['nome'];
$Cognome=$_GET['cognome'];
$Email=$_GET['email'];
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_GET['Id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione non stabilita: " . mysqli_connect_error());
}

echo ("<form action='' method='get'>");
echo ("<input type='text' name='nome' placeholder='Nome' value='$Nome' required>");
echo ("<input type='text' name='cognome' placeholder='Cognome' value='$Cognome' required>");
echo ("<input type='email' name='email' placeholder='Email' value='$Email' required>");
echo ("<input type ='hidden' name ='Id' value ='$id'>");
echo ('<br>');

$sql = "UPDATE dbasl SET NOME='$Nome', COGNOME='$Cognome', EMAIL='$Email' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Riga aggiornata";
} else {
    echo "Errore nell'aggiornamento: " . $conn->error;
}

echo ("<input type='submit' value='Aggiungi' name='aggiungi'>");
echo ("</form>");
echo ("</body>");

$conn->close();
?>
