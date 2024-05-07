<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $sabor = $_POST['sabor'];
    
    $sql = "INSERT INTO itens (produto, quantidade, sabor) VALUES ('$produto', '$quantidade', '$sabor')";

    if ($conn->query($sql) === TRUE) {
        echo "Item adicionado à lista de compras com sucesso!";
    } else {
        echo "Erro ao adicionar item: " . $conn->error;
    }
}

$conn->close();
?>
