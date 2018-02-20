function ricerca()
{
    var casella = document.getElementsByTagName("td");
    for ( var i = 0; i < casella.length; i++ )
    {
        if (casella[i].innerHTML == document.getElementById("ricerca").value)
        {
            casella[i].style.backgroundColor = "#000000";
            casella[i].style.color = "#ffffff";
        }
    }
}