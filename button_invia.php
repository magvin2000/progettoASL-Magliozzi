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
    <h2>Inserisci i dati</h2>
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="cognome" placeholder="Cognome" required>
    <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="submit" value="Aggiungi" name="aggiungi" class="update_button">
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