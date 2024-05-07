<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com Atualização Dinâmica</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Lista de Itens</h2>
    <form id="crud-form">
        <label for="item">Novo Item:</label>
        <input type="text" id="item" name="item" required>
        <button type="button" onclick="addItem()">Adicionar</button>
    </form>

    <div id="table-container"></div>

    <script>
        function addItem() {
            var item = document.getElementById("item").value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table-container").innerHTML = this.responseText;
                    document.getElementById("item").value = "";
                }
            };
            xhr.open("GET", "crud.php?action=add&item=" + item, true);
            xhr.send();
        }

        function deleteItem(id) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table-container").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "crud.php?action=delete&id=" + id, true);
            xhr.send();
        }

        // Atualiza a tabela quando a página é carregada
        window.onload = function() {
            addItem();
        };
    </script>

</body>
</html>
