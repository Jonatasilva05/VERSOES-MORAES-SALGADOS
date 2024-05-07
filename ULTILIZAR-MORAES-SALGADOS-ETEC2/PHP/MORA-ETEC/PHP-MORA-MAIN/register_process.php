<?php
session_start();

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

    // Consulta SQL para verificar se o usuário existe no banco de dados
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuário encontrado, verifica se é administrador
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['is_admin'] = $row['is_admin'];
        if ($row['is_admin'] == 1) {
            // É um administrador, redireciona para a página de administração
            header("Location: admin_page.php");
        } else {
            // Não é um administrador, redireciona para a página normal
            header("Location: user_page.php");
        }
    } else {
        // Usuário não encontrado, redireciona de volta para o formulário de login
        header("Location: index.php");
    }

    $conn->close();
}
?>
