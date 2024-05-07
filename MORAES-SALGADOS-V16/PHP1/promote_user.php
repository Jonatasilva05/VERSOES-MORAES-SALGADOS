<?php
session_start();

// Verifica se o usuário está logado e é um administrador
if(isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
    // É um administrador, processa a promoção do usuário

    // Verifica se o ID do usuário a ser promovido foi fornecido na URL
    if(isset($_GET['id'])) {
        // Conecta ao banco de dados (substitua essas informações pelos seus próprios dados de conexão)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "feedback_system";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }

        // Obtém o ID do usuário a ser promovido
        $user_id = $_GET['id'];

        // Consulta SQL para atualizar o usuário para administrador
        $sql = "UPDATE users SET is_admin=1 WHERE user_id=$user_id";
        if ($conn->query($sql) === TRUE) {
            echo "Usuário promovido para administrador com sucesso.";
            header("Location: register_admin_process.php");
        } else {
            echo "Erro ao promover o usuário para administrador: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "ID do usuário não fornecido.";
    }
} else {
    // Se não for um administrador, redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>
