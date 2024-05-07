<?php
session_start();

// Verifica se o usuário está logado e é um administrador
if(isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
    // É um administrador, exibe o conteúdo da página
    echo "<h2>Página de Mensagens</h2>";

    // Exibir todas as mensagens de feedback (avaliações, reclamações e sugestões)
    echo "<h3>Feedback</h3>";
    // Coloque aqui o código para exibir todas as mensagens de feedback do banco de dados

    // Exibir todas as sugestões
    echo "<h3>Sugestões</h3>";
    // Coloque aqui o código para exibir todas as sugestões do banco de dados

    // Formulário para exclusão de mensagens
    echo "
    <h3>Excluir Mensagem</h3>
    <form action='delete_message.php' method='post'>
        <label for='message_id'>ID da Mensagem:</label>
        <input type='text' name='message_id' required><br>
        <input type='submit' value='Excluir Mensagem'>
    </form>
    ";

} else {
    // Se não for um administrador, redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>