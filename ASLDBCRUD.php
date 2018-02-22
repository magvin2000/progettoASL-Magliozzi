<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript_funzioni.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>DATABASE</title>
</head>
<body>
<br>
<div class="container">
    <form method="get" action="button_invia.php">
        <button class="col-lg-12 btn btn-success" type="submit">
            <span class="glyphicon glyphicon-plus"></span>
                Aggiungi
        </button>
    </form>
    <br> <br> <br>
    <table align = "center" id="tabella" class="table">
        <tr>
            <th><center>ID</center></th>
            <th><center>NOME</center></th>
            <th><center>COGNOME</center></th>
            <th><center>EMAIL</center></th>
            <th><center>AGGIORNA</center></th>
            <th><center>ELIMINA</center></th>
        </tr>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
//modifica
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT ID, NOME, COGNOME, EMAIL FROM dbasl";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ID=$row["ID"];
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
        <form action ='button_aggiorna.php' method='get'>
        <input type = 'hidden' name = 'nome' value = '$nome' >
        <input type = 'hidden' name = 'cognome' value = '$cognome'> 
        <input type = 'hidden' name = 'email' value = '$email'>
        <input type = 'hidden' name = 'Id' value = '$ID'>
        <button = 'submit' class='btn btn-warning'>
        <span class = 'glyphicon glyphicon-edit'></span>
        Aggiorna
        </button>
        </form>
        </td>
        <td align = 'center'>
        <form action ='button_elimina.php' method='get'>
        <input type = 'hidden' name = 'Id' value = '$ID'>
        <button type = 'submit' class='btn btn-danger'>
        <span class = 'glyphicon glyphicon-trash'></span>
        Elimina
        </button>
        </form>
        </td>
        </tr> ");
    }
}
$conn->close();
?>
</table>
    <div class="input-group">
        <span class="input-group-addon" id="search-query"><span class="glyphicon glyphicon-search"></span></span>
        <input type="text" class="form-control" placeholder="Cerca nella tabella" id="ricerca" onkeyup="ricerca();">
    </div>
</div>
</body>
</html>
