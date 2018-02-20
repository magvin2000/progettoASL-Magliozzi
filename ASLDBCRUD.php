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
    <form method="get" action="button_invia.php" class="update_button">
        <input type="submit" value="Aggiungi">
    </form>
<table width="100" border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>COGNOME</th>
        <th>EMAIL</th>
    </tr>

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
        $nome = $row["NOME"];
        $cognome = $row["COGNOME"];
        $email = $row["EMAIL"];
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
        echo ("<input type = 'hidden' name = 'nome' value = '$nome' >");
        echo ("<input type = 'hidden' name = 'cognome' value = '$cognome'>");
        echo ("<input type = 'hidden' name = 'email' value = '$email'>");
        echo ("<input type = 'hidden' name = 'Id' value = '$ID'>");
        echo ('<input type ="submit" value ="aggiorna">');
        echo('</form>');
        echo('</td>');
        echo('<td>');
        echo ('<form action ="button_elimina.php" method="get">');
        echo ("<input type = 'hidden' name = 'Id' value = '$ID'>");
        echo ('<input type ="submit" value ="elimina">');
        echo ('</form>');
        echo('</td>');
        echo('</tr>');
    }
}


$conn->close();
?>
</table>
<input type="text" name="ricerca" placeholder="scrivi qui il nome ricercato" >
