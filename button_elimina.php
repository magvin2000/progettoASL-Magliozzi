<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="nuovo";
$id = $_GET['Id'];
$conn =  new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM dbasl WHERE ID='$id'";
$conn->query($sql);
//header usato in Dom
$conn->close();