<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>DATABASE</title>
</head>
<body>

<form action='update.php' method='get'>
    <h2>Modifica i dati</h2>
    <input type='text' name='nome' placeholder='Nome' value="<?php echo $_GET['nome']; ?>" required>
    <input type='text' name='cognome' placeholder='Cognome' value='<?php echo $_GET['cognome']; ?>' required>
    <input type='email' name='email' placeholder='Email' value='<?php echo $_GET['email']; ?>' required>
    <input type ='hidden' name ='Id' value ='<?php echo $_GET['Id']; ?>'>
    <br>
    <input type='submit' value='Aggiorna' name='Aggiorna' class='update_button'>
</form>
</body>
</html>
