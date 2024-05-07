<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: index.php");
    exit; // Certifique-se de sair do script para evitar que o código abaixo seja executado
}

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
    $user_id = $_SESSION['user_id'];
    $feedback_type = $_POST['feedback_type'];
    $feedback_message = mysqli_real_escape_string($conn, $_POST['feedback_message']);

    // Insere o feedback no banco de dados
    $sql = "INSERT INTO feedback (user_id, feedback_type, feedback_message) VALUES ('$user_id', '$feedback_type', '$feedback_message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Feedback enviado com sucesso!";
        session_start();
        session_unset(); // Limpa todas as variáveis de sessão
        session_destroy(); // Destrói a sessão

        // Redireciona o usuário de volta para a página de login
        header("Location: index.php");
        exit;

    } else {
        echo "Erro ao enviar feedback: " . $conn->error;
    }

    $conn->close();
} else {
    // Se o formulário não foi enviado, redireciona para a página inicial
    header("Location: index.php");
}
?>
