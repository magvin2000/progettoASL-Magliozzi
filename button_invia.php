<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>DATABASE</title>
</head>
<body>
<div class="container">
    <form action="" method="get">
    <h2>Inserisci i dati</h2>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="cognome" placeholder="Cognome" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <br>
        <button type="submit" name="aggiungi" class="btn btn-success form-control">
            <span class="glyphicon glyphicon-send"></span>
            Invia
        </button>
    </form>
</div>

<?php

if (isset($_GET['nome']) && isset($_GET['cognome']) && isset($_GET['email'])) {
    $Nome = htmlentities($_GET['nome']);
    $Cognome = htmlentities($_GET['cognome']);
    $Email = htmlentities($_GET['email']);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nuovo";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO dbasl (NOME,COGNOME, EMAIL) VALUES ('$Nome', '$Cognome', '$Email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ASLDBCRUD.php");
    $conn->close();
}
    ?>
</body>
</html>