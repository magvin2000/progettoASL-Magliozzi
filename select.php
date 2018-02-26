<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$conn = new mysqli($servername, $username, $password,$dbname);


$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Utilizzata in questo caso per l'implementazione dell'ajax
    echo "<tr>
    <th onclick='ordinamento(\"Id\");'>
    <center>
    <span class='glyphicon glyphicon-chevron-down'></span>
    N°
    </center>
    </th>
    <th onclick='ordinamento(\"nome\");'>
    <center>
    <span class='glyphicon glyphicon-chevron-down'></span>
    NOME
    </center>
    </th>
    <th onclick='ordinamento(\"cognome\");'>
    <center>
    <span class='glyphicon glyphicon-chevron-down'></span>
    COGNOME
    </center>
    </th>
    <th onclick='ordinamento(\"email\");'>
    <center>
    <span class='glyphicon glyphicon-chevron-down'></span>
    EMAIL
    </center>
    </th>
    <th><center>AGGIORNA</center></th>
    <th><center>ELIMINA</center></th>
    </tr>";
    //fine dell'utilizzo dell'ordinamento
    while($row = $result->fetch_assoc()) {
        $Id=$row["ID"];
        $nome = $row["NOME"];
        $cognome = $row["COGNOME"];
        $email = $row["EMAIL"];
        echo ("<tr>
        <td align = 'center'> " .
        $row["ID"] .
        "</td>
        <td align = 'center'> " .
        $row["NOME"] .
        "</td>
        <td align = 'center'> " .
        $row["COGNOME"] .
        "</td>
        <td align = 'center'> " .
        $row["EMAIL"] .
        "</td>
        <td align = 'center'>
        <input type = 'hidden' name = 'nome' value = '$nome' >
        <input type = 'hidden' name = 'cognome' value = '$cognome'>
        <input type = 'hidden' name = 'email' value = '$email'>
        <input type = 'hidden' name = 'Id' value = '$Id'>
        <button type = 'button' onclick='aggiornamento()' class='btn btn-warning'>
        <span class = 'glyphicon glyphicon-edit'></span>
        Aggiorna
        </button>
        </td>
        <td align = 'center'>
        <button type = 'button' onclick='eliminazione($Id)' class='btn btn-danger'>
        <span class = 'glyphicon glyphicon-trash'></span>
        Elimina
        </button>
        </td>
        </tr> ");
    }
}
$conn->close();
//header usato in Dom
?>