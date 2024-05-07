<?php
session_start();

// Verifica se o botão de logout foi pressionado
if (isset($_POST['logout'])) {
    // Limpa todas as variáveis de sessão
    session_unset();
    // Destrói a sessão
    session_destroy();
}

// Redireciona o usuário para a página inicial
header("Location: index.php");
exit;
?>