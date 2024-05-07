<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidadeCombos = $_POST['quantidadeCombo'];
    $quantidadeTipos = $_POST['quantidadeTipos'];
    
    $sql = "INSERT INTO combos (quantidade_combos, quantidade_tipos) VALUES ('$quantidadeCombos', '$quantidadeTipos')";

    if ($conn->query($sql) === TRUE) {
        echo "Combo adicionado à lista de compras com sucesso!";
    } else {
        echo "Erro ao adicionar combo: " . $conn->error;
    }
}

$conn->close();
?>
