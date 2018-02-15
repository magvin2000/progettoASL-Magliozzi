<?php


$servername = "localhost";
$username = "root";
$password="";

$conn = mysqli_connect($servername, $username, $password);
$sql = "SELECT ID, NOME, COGNOME,E-MAIL FROM dbasl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["nome"]. " " . $row["cognome"] . "<br>";
    }
} else {
    echo "0 results";
}