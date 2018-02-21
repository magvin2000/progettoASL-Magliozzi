<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ID=$row["ID"];
        $nome = $row["NOME"];
        $cognome = $row["COGNOME"];
        $email = $row["EMAIL"];
        echo("<tr>
        <td>" .
        $row["ID"] .
        "</td>
        <td>" .
        $row["NOME"] .
        "</td>
        <td>" .
        $row["COGNOME"] .
        "</td>
        <td>" .
        $row["EMAIL"] .
        "</td>
        <td>
        <form action ='button_aggiorna.php' method='get'>
        <input type = 'hidden' name = 'nome' value = '$nome' >
        <input type = 'hidden' name = 'cognome' value = '$cognome'>
        <input type = 'hidden' name = 'email' value = '$email'>
        <input type = 'hidden' name = 'Id' value = '$ID'>
        <input type ='submit' value ='aggiorna'>
        </form>
        </td>
        <td>
        <form action ='button_elimina.php' method='get'>
        <input type = 'hidden' name = 'Id' value = '$ID'>
        <input type ='submit' value ='elimina'>
        </form>
        </td>
        </tr>");
    }
}

$conn->close();