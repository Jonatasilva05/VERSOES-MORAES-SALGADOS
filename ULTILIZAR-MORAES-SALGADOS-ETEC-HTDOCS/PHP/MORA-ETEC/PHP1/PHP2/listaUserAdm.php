<?php
session_start();

// Verifica se o usuário está logado como administrador
if (!isset($_SESSION['username']) || $_SESSION['type'] !== 'admin') {
    header("Location: logi.php");
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

// Consulta para obter todos os usuários
$sql_users = "SELECT * FROM users";
$result_users = $conn->query($sql_users);

// Consulta para obter todos os administradores
$sql_admins = "SELECT * FROM admins";
$result_admins = $conn->query($sql_admins);

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários e Administradores</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="container">
        <h2>Listar Usuários e Administradores</h2>

        <h3>Usuários</h3>
        <ul>
            <?php
            if ($result_users->num_rows > 0) {
                while ($row = $result_users->fetch_assoc()) {
                    echo "<li>{$row['username']} <a href='excluir.php?type=user&id={$row['user_id']}'>Excluir</a></li>";
                }
            } else {
                echo "<li>Nenhum usuário encontrado</li>";
            }
            ?>
        </ul>
        
        <h3>Administradores</h3>
        <ul>
            <?php
            if ($result_admins->num_rows > 0) {
                while ($row = $result_admins->fetch_assoc()) {
                    echo "<li>{$row['username']} <a href='excluir.php?type=admin&id={$row['admin_id']}'>Excluir</a></li>";
                }
            } else {
                echo "<li>Nenhum administrador encontrado</li>";
            }
            ?>
        </ul>
    </div>
    <?php
            echo '<form action="../desconect.php" method="post"><button type="submit" name="desconect">desconectar user/adm</button></form>';
        ?>
</body>
</html>
