<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Compras</h1>
    <form id="addItemForm">
        <input type="text" id="item" placeholder="Digite o produto" required>
        <input type="number" id="quantidade" placeholder="Quantidade" required>
        <input type="text" id="sabor" placeholder="Sabor (opcional)">
        <button type="submit">Adicionar à Lista</button>
    </form>
    <h2>Combos</h2>
    <form id="addComboForm">
        <input type="number" id="quantidadeCombo" placeholder="Quantidade de Combos" required>
        <input type="number" id="quantidadeTipos" placeholder="Tipos de Salgados ou Sabores (mínimo 3)" required>
        <button type="submit">Adicionar Combo</button>
    </form>
    <div id="listaCompras"></div>

    <script src="script.js"></script>
</body>
</html>
