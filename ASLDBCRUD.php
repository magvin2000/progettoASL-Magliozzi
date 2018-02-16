<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>DATABASE</title>
</head>
<body>
<div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="btn btn-primary">Aggiungi</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
        <form method="get" action="button_invia.php">
            <div>
                <h2>Inserisci i dati</h2>
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="cognome" placeholder="Cognome">
                <input type="email" name="email" placeholder="Email">
                <input type="submit" value="Aggiungi">
            </div>
        </form>
    </div>
</div>
<table width="100" border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>COGNOME</th>
        <th>E-MAIL</th>
    </tr>



</table>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo('<tr>');
        echo ($row["ID"]);
        echo ($row["NOME"]);
        echo ($row["COGNOME"]);
        echo ($row["EMAIL"]);
        echo ('</tr>');
        echo ('</th>');
        echo ('<th>');
        echo ("COGNOME");
        echo ('</th>');
        echo ('<th>');
        echo ('</tr>');
    }
}
else {
    echo "0 results";
}

$conn->close();