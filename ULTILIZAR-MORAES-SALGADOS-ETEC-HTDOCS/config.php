<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clienteslista";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
