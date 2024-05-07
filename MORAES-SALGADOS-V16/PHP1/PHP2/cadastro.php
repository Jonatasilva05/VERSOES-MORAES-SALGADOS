<?php
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
$email = $_POST['email'];
$type = $_POST['type'];

// Insere os dados na tabela correta com base no tipo de conta
if ($type === 'user') {
    $table = 'users';
} elseif ($type === 'admin') {
    $table = 'admins';
} else {
    die("Tipo de conta inválido.");
}

$sql = "INSERT INTO $table (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso.";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
