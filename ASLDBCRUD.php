<!DOCTYPE html>
<html lang="it">
<head>
    <!-- script jquery, script bootstrap, script funzioni, style jquery, style bootstrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="javascript_funzioni.js"></script>
    <title>DATABASE</title>
</head>
<body onload="selezione()">
<br>

<div class="container">
        <button type='button' onclick="agg()" class="col-lg-12 btn btn-success" >
            <span class="glyphicon glyphicon-plus"></span>
                Aggiungi
        </button>
    <br> <br> <br>
    <table align = "center" id="tabella"  class="table" >
    </table>
    <div class="input-group">
        <span class="input-group-addon" id="search-query"><span class="glyphicon glyphicon-search"></span></span>
        <input type="text" class="form-control" placeholder="Cerca nella tabella" id="ricerca" onkeyup="ricerca();">
    </div>
</div>
<p id="cancella"></p>
<p id="inserisci"></p>
</body>
</html>
