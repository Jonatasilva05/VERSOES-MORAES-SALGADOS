<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sugestões</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
session_start();

// Verifica se o usuário está logado e é um administrador
if(isset($_SESSION['user_id']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    // Se for um administrador, exibe as sugestões
    echo "<h2>Sugestões</h2>";
    // Coloque aqui o código para exibir as sugestões do banco de dados
} else {
    // Se não for um administrador, redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>

</body>
</html>
