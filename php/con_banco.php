<?php

$ip = "localhost";
$user = "root";
$pass = "";
$db_nm = "mochila_cheia";

$conn = new mysqli($ip, $user, $pass, $db_nm);


if ($conn->connect_error) {
    die("Erro: " . $con->error);
}

?>