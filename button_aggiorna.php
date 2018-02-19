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

<form action='' method='get'>
    <h2>Modifica i dati</h2>
    <input type='text' name='nome' placeholder='Nome' value="<?php echo $_GET['nome']; ?>" required>
    <input type='text' name='cognome' placeholder='Cognome' value='<?php echo $_GET['cognome']; ?>' required>
    <input type='email' name='email' placeholder='Email' value='<?php echo $_GET['email']; ?>' required>
    <input type ='hidden' name ='Id' value ='<?php echo $_GET['Id']; ?>'>
    <br>
    <input type='submit' value='Aggiorna' name='Aggiorna' class='update_button'>
</form>

<?php
//if (isset($_GET['nome']) && isset($_GET['cognome']) && isset($_GET['email'])) {
    $Nome = $_GET['nome'];
    $Cognome = $_GET['cognome'];
    $Email = $_GET['email'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nuovo";
    $id = $_GET['Id'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connessione non stabilita: " . mysqli_connect_error());
    }

    $sql = "UPDATE dbasl SET NOME='$Nome', COGNOME='$Cognome', EMAIL='$Email' WHERE ID='$id'";

    $conn->query($sql);
    //header("location:http://localhost/progettoASL-MagliozziCassin/ASLDBCRUD.php");
    $conn->close();

?>
</body>
