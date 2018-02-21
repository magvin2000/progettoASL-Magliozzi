function select()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            var xmlDoc = this.responseXML;
            var table="<tr><th>ID</th><th>NOME</th><th>COGNOME</th><th>EMAIL</th></tr>";
            var x = xmlDoc.getElementsByTagName("...");
            for (var i = 0; i < x.length; i++) {
                table += "<tr><td>" +

                    "</td><td>" +

                    "</td></tr>";
            }
            document.getElementById("tabella").innerHTML = table;
        }
    };
    xhttp.open("GET", "...", true);
    xhttp.send();
}