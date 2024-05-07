<?php
session_start();

// Verifica se o usuário está logado como administrador
if (!isset($_SESSION['username']) || $_SESSION['type'] !== 'admin') {
    header("Location: index.html");
    exit();
}

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

// Obtém o tipo (user ou admin) e o ID do registro a ser excluído
$type = $_GET['type'];
$id = $_GET['id'];

// Determina a tabela e o campo de ID com base no tipo
if ($type === 'user') {
    $table = 'users';
    $id_field = 'user_id';
} elseif ($type === 'admin') {
    $table = 'admins';
    $id_field = 'admin_id';
} else {
    die("Tipo inválido.");
}

// Exclui o registro da tabela
$sql = "DELETE FROM $table WHERE $id_field = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso.";
} else {
    echo "Erro ao excluir o registro: " . $conn->error;
}

$conn->close();
?>
