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