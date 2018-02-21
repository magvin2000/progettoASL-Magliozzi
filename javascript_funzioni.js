function ricerca()
{
    var ricerca=document.getElementById("ricerca").value;
    var casella = document.getElementsByTagName("td");
    for ( var i = 0; i < casella.length; i++ )
    {
        if(!ricerca) {
            casella[i].style.backgroundColor = "#ffffff";
            casella[i].style.color = "#000000";
        }
        else
        {

            if (casella[i].innerHTML.indexOf(ricerca) > -1 && casella[i].innerHTML.indexOf("<" )===-1) {
                casella[i].style.backgroundColor = "#000000";
                casella[i].style.color = "#ffffff";
            }
            else
            {
                casella[i].style.backgroundColor = "#ffffff";
                casella[i].style.color = "#000000";
            }
        }
    }
}

function select()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            var xmlDoc = this.responseXML;
            var table="<tr><th>ID</th><th>NOME</th><th>COGNOME</th><th>EMAIL</th></tr>";
            var x = xmlDoc.getElementsByTagName("");
            for (var i = 0; i < x.length; i++)
            {
                "...";
            }
            document.getElementById("tabella").innerHTML = table;
        }
    };
    xhttp.open("GET", "select.php", true);
    xhttp.send();
}