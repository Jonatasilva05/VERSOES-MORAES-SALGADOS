<?php
session_start();

// Verifica se o usuário está logado e é um administrador
if(isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback_system";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    // É um administrador, exibe o conteúdo da página
    echo "<h2>Página do Administrador</h2>";

    // Formulário para cadastrar novo usuário
    echo "
    <h3>Cadastrar Novo Usuário</h3>
    <form action='register_process.php' method='post'>
        <label for='username'>Nome de Usuário:</label>
        <input type='text' name='username' required><br>
        <label for='password'>Senha:</label>
        <input type='password' name='password' required><br>
        <label for='is_admin'>É um Administrador?</label>
        <input type='checkbox' name='is_admin' value='1'><br>
        <input type='submit' value='Cadastrar Usuário'>
    </form>
    ";

    // Lista de usuários cadastrados
    echo "<h3>Lista de Usuários</h3>";
    // Coloque aqui o código para exibir a lista de usuários do banco de dados
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibe a lista de usuários
        echo "<h2>Lista de Usuários</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome de Usuário</th><th>Ações</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td><a href='delete_user.php?id=".$row['user_id']."'>Excluir</a> | <a href='promote_user.php?id=".$row['user_id']."'>Promover para Admin</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum usuário cadastrado.";
    }

    $conn->close();
    // Exibir todas as mensagens de feedback (avaliações, reclamações e sugestões)
    echo "<h3>Feedback</h3>";
    // Coloque aqui o código para exibir todas as mensagens de feedback do banco de dados

    // Link para a página de visualização e exclusão de mensagens
    echo "<p><a href='messages_page.php'>Visualizar e Excluir Mensagens</a></p>";

} else {
    // Se não for um administrador, redireciona para a página inicial
    header("Location: index.php");
    exit;
}
?>