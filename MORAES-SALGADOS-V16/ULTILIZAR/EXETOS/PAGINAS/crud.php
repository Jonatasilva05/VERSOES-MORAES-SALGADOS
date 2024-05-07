<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minhabasedados";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Adicionar um novo produto
if ($_GET['action'] == 'add') {
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];

    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', $preco)";
    $conn->query($sql);
}

// Deletar um produto existente
if ($_GET['action'] == 'delete') {
    $idToDelete = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = $idToDelete";
    $conn->query($sql);
}

// Atualizar um produto existente
if ($_GET['action'] == 'update') {
    $idToUpdate = $_GET['id'];
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];

    $sql = "UPDATE produtos SET nome = '$nome', preco = $preco WHERE id = $idToUpdate";
    $conn->query($sql);
}

// Obter detalhes de um produto
if ($_GET['action'] == 'getDetails') {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM produtos WHERE id = $id");
    $produtoDetails = $result->fetch_assoc();
    echo json_encode($produtoDetails);
}

// Listar todos os produtos para dropdown
if ($_GET['action'] == 'getProdutos') {
    $result = $conn->query("SELECT id, nome FROM produtos");
    $produtos = [];
    while ($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
    echo json_encode($produtos);
}

$conn->close();
?>
