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
header("location:http://localhost/progettoASL-MagliozziCassin/ASLDBCRUD.php");
?>