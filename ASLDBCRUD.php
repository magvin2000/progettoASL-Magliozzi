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
    <form method="get" action="button_invia.php">
        <input type="submit" value="Aggiungi">
    </form>
<table width="100" border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>COGNOME</th>
        <th>E-MAIL</th>
    </tr>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ID=$row["ID"];
        echo('<tr>');
        echo('<td>');
        echo($row["ID"]);
        echo('</td>');
        echo('<td>');
        echo($row["NOME"]);
        echo('</td>');
        echo('<td>');
        echo($row["COGNOME"]);
        echo('</td>');
        echo('<td>');
        echo($row["EMAIL"]);
        echo ('</td>');
        echo('<td>');
        echo ('<form action ="button_aggiorna.php" method="get">');
        echo ("<input type = 'hidden' name = 'Id' value = '$ID''>");
        echo ('<input type ="submit" value ="Aggiorna">');
        echo('</form>');
        echo('</td>');
        echo('<td>');
        echo ('<form action ="button_elimina.php" method="get">');
        echo ("<input type = 'hidden' name = 'Id' value = '$ID'>");
        echo ('<input type ="submit" value ="Elimina">');
        echo ('</form>');
        echo('</td>');
        echo('</tr>');
    }
}

echo ('</table>');
$conn->close();