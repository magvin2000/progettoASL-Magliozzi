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

function selezione() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("tabella").innerHTML =
        "<tr>"+
            "<th onclick='ordinamento(\"Id\");'>"+
                "<center>"+
                    "<span class='glyphicon glyphicon-chevron-down'></span>"+
                    "ID"+
                "</center>"+
            "</th>"+
            "<th onclick='ordinamento(\"nome\");'>"+
                "<center>"+
                    "<span class='glyphicon glyphicon-chevron-down'></span>"+
                    "NOME"+
                "</center>"+
            "</th>"+
            "<th onclick='ordinamento(\"cognome\");'>"+
                "<center>"+
                    "<span class='glyphicon glyphicon-chevron-down'></span>"+
                    "COGNOME"+
                "</center>"+
            "</th>"+
            "<th onclick='ordinamento(\"email\");'>"+
                "<center>"+
                    "<span class='glyphicon glyphicon-chevron-down'></span>"+
                    "EMAIL"+
                "</center>"+
            "</th>"+
            "<th><center>AGGIORNA</center></th>"+
            "<th><center>ELIMINA</center></th>"+
            "</tr>"+
                this.responseText;
        }
    };
    xhttp.open("GET", "select.php", true);
    xhttp.send();
}

function agg(elemento,tipo,id){
    var nome="",cognome="",email="";
    appoggio=elemento.innerHTML;
    if(tipo==="Update"){
        nome=elemento.getElementsByTagName('input')[0].value;
        cognome=elemento.getElementsByTagName('input')[1].value;
        email=elemento.getElementsByTagName('input')[2].value;
    }
    elemento.innerHTML = "Nome<input type=\"text\" name=\"nome\" value='" + nome + "'    required>\n" +
        "Cognome<input type=\"text\" name=\"cognome\"  value='" + cognome + "'  required>\n" +
        "Mail<input type=\"email\" name=\"mail\" value=" + email + ">\n" +
        "<input type='hidden' name='Identificativo' value=" + id + ">\n";
    if(tipo==="Aggiungi")elemento.innerHTML+="<button class=\"btn btn-success glyphicon glyphicon-envelope\" onclick=\"Aggiungi(this.parentNode)\"> Invia</button>\n";
    else if(tipo==="Update")elemento.innerHTML+="<button class=\"btn btn-success glyphicon glyphicon-envelope\" onclick=\"Update(this.parentNode)\"> Invia</button>\n";
    elemento.innerHTML+="<button id='Annulla' class='btn btn-danger glyphicon glyphicon-remove' onclick='Annulla(this.parentNode)'> Annulla</button>";
}

function aggiunta(elemento) {
    var xhttp = new XMLHttpRequest();
    var nome=elemento.getElementsByTagName('input')[0].value;
    var cognome=elemento.getElementsByTagName('input')[1].value;
    var email=elemento.getElementsByTagName('input')[2].value;
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            if(this.responseText!=="")  elemento.getElementsByTagName('input')[0].value=this.responseText;
            else {
                elemento.innerHTML = "<button class=\"btn btn-success glyphicon glyphicon-plus\" onclick=\"Form(document.getElementById('p'),'Aggiungi',0);\"> Aggiungi</button>";
                Select(document.getElementById('Tabella'));
            }
        }
    };
    xhttp.open("GET", "Aggiungi.php?nome=" + nome + "&cognome=" + cognome + "&email=" + email, true);
    xhttp.send();
}

function aggiornamento(elemento) {
    var xhttp = new XMLHttpRequest();
    var nome=elemento.getElementsByTagName('input')[0].value;
    var cognome=elemento.getElementsByTagName('input')[1].value;
    var email=elemento.getElementsByTagName('input')[2].value;
    var id=elemento.getElementsByTagName('input')[3].value;
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            if(this.responseText!=="")  elemento.getElementsByTagName('input')[0].value=this.responseText;
            else Select(document.getElementById('Tabella'));
        }
    };
    xhttp.open("GET", "Update.php?nome=" + nome + "&cognome=" + cognome + "&email=" + email +"&Identificativo="+id, true);
    xhttp.send();
}

function eliminazione(Id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            Select(document.getElementById('Tabella'));
        }
    };
    xhttp.open("GET", "Delete.php?Identificativo="+Id, true);
    xhttp.send();
}

function annullamento(elemento) {
    elemento.innerHTML=appoggio;
}