function ricerca()
{
    var ricerca = document.getElementById("ricerca").value;
    var casella = document.getElementsByTagName("td");
    for ( var i = 0; i < casella.length; i++ )
    {
        if(!ricerca)
        {
            casella[i].style.backgroundColor = "#ffffff";
            casella[i].style.color = "#000000";
        }
        else
        {
            if (casella[i].innerHTML.toUpperCase().search(ricerca.toUpperCase()) > -1 && (casella[i].innerHTML.search("<")) === -1)
            {
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

function ordinamento(tipo)
{
    var tmp=new Array();
    var tmp2=new Array();
    var righe = document.getElementsByTagName("tr");
    var colonne = document.getElementsByName(tipo);
    for(var i=0;i<colonne.length;i++)
    {
        tmp[i]=colonne[i].value.toLowerCase() + i.toString();
        tmp2[i]=righe[i+1].innerHTML;
    }
    tmp.sort();

    for(var i=0;i<tmp.length;i++)
    {
        righe[i+1].innerHTML=tmp2[tmp[i][tmp[i].length-1]];
    }
}