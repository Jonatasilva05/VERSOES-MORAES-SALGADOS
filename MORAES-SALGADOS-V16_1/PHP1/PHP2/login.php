<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Recupera os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica se o usuário é um administrador
$sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['type'] = 'admin';
    header("Location: listaUserAdm.php");
    exit();
}

// Verifica se o usuário é um usuário comum
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['type'] = 'user';
    header("Location: ../index.html");
    exit();
}

// Caso nenhum usuário seja encontrado, exibe uma mensagem de erro
echo '
    <script>
        alert("Usuário ou senha incorretos.");
        window.history.back();
    </script>
';

$conn->close();
?>