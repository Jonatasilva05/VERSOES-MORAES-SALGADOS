<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        section {
            margin-bottom: 20px;
        }

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

    <h2>Lista de Produtos</h2>

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

        // Consulta para obter a lista de produtos
        $sqlProducts = "SELECT * FROM produtos";
        $resultProducts = $conn->query($sqlProducts);

        // Exibir a lista de produtos
        if ($resultProducts->num_rows > 0) {
            while ($rowProduct = $resultProducts->fetch_assoc()) {
                $productId = $rowProduct["id"];
                $productName = $rowProduct["nome"];

                echo "<section>
                        <h3>$productName</h3>
                        <p>Quantidade disponível: " . getAvailableQuantity($conn, $productId) . "</p>
                        <button onclick='addItem($productId, \"$productName\")'>Adicionar à Lista</button>
                      </section>";
            }
        } else {
            echo "<p>Nenhum produto encontrado.</p>";
        }

        // Função para obter a quantidade disponível de um produto
        function getAvailableQuantity($conn, $productId) {
            $sqlQuantity = "SELECT COUNT(*) as quantidade FROM itens WHERE produto_id = $productId";
            $resultQuantity = $conn->query($sqlQuantity);
            
            if ($resultQuantity->num_rows > 0) {
                $rowQuantity = $resultQuantity->fetch_assoc();
                return $rowQuantity["quantidade"];
            } else {
                return 0;
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    ?>

    <h2>Lista de Itens Selecionados</h2>
    <table id="selected-items">
        <tr>
            <th>ID</th>
            <th>Produto</th>
        </tr>
    </table>

    <script>
        function addItem(productId, productName) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Atualiza a tabela de itens selecionados
                    document.getElementById("selected-items").innerHTML += this.responseText;
                }
            };
            xhr.open("GET", "crud.php?action=add&product_id=" + productId + "&product_name=" + productName, true);
            xhr.send();
        }
    </script>

</body>
</html>
