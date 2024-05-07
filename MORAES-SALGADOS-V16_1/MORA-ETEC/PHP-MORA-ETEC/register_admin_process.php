<?php
session_start();

// Verifica se o usuário está logado e é um administrador
if(isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Limpa e verifica os dados de entrada
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Insere o novo administrador na tabela 'administrators'
        $sql = "INSERT INTO administrators (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Novo administrador cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o administrador: " . $conn->error;
        }

        $conn->close();
    }
} else {
    // Se não for um administrador, redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>
