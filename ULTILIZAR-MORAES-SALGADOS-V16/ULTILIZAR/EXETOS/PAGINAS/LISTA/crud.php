<?php

// Conexão com o banco de dados
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
    $productId = $_GET['product_id'];
    $productName = $_GET['product_name'];

    // Inserir o produto na tabela
    $sqlInsert = "INSERT INTO itens (produto_id, nome) VALUES ('$productId', '$productName')";
    $conn->query($sqlInsert);

    // Exibir o item adicionado na tabela
    $lastItemId = $conn->insert_id;
    echo "<tr>
            <td>$lastItemId</td>
            <td>$productName</td>
          </tr>";
}

// Restante do seu código para excluir e exibir itens...

// Fecha a conexão com o banco de dados
$conn->close();
?>
