<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="javascript_funzioni.js"></script>
    <title>DATABASE</title>
</head>
<body onload="select();">
    <form method="get" action="button_invia.php" class="update_button">
        <input type="submit" value="Aggiungi">
    </form>
    <table width="100" border="1" align = "center" id="tabella"></table>
    <input type="text" name="ricerca" placeholder="Cerca nella tabella" id="ricerca" onkeyup="ricerca();">
</body>
</html>
