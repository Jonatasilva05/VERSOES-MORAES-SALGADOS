<?php

// Conexão com o banco de dados (substitua pelas suas credenciais)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minhabasedados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Adicionar um novo item
if ($_GET['action'] == 'add') {
    $newItem = $_GET['item'];
    $sql = "INSERT INTO produtos (nome) VALUES ('$newItem')";
    $conn->query($sql);
}

// Deletar um item existente
if ($_GET['action'] == 'delete') {
    $idToDelete = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = $idToDelete";
    $conn->query($sql);
}

// Exibir a tabela atualizada
echo "<table>
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Ações</th>
        </tr>";
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $item = $row["nome"];
        echo "<tr>
                <td>$id</td>
                <td>$item</td>
                <td><button onclick='deleteItem($id)'>Excluir</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nenhum item encontrado</td></tr>";
}
echo "</table>";

// Fecha a conexão com o banco de dados
$conn->close();
?>
