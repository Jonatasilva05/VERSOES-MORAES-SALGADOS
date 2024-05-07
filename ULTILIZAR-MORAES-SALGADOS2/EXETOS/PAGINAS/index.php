<!-- ... (parte anterior do código) -->

<h2>Lista de Produtos</h2>
<form id="crud-form">
    <label for="produto">Selecione um Produto:</label>
    <select id="produto" name="produto" onchange="loadProdutoDetails()">
        <option value="coxa">-- elecione um Produto --</option>
    </select>
    <br>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco" required>
    <button type="button" onclick="updateProduto()">Atualizar</button>
    <button type="button" onclick="deleteProduto()">Excluir</button>
</form>

<div id="table-container"></div>

<script>
    function loadProdutoDetails() {
        var selectedProduto = document.getElementById("produto").value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var produtoDetails = JSON.parse(this.responseText);
                document.getElementById("nome").value = produtoDetails.nome;
                document.getElementById("preco").value = produtoDetails.preco;
            }
        };
        xhr.open("GET", "crud.php?action=getDetails&id=" + selectedProduto, true);
        xhr.send();
    }

    function updateProduto() {
        var selectedProduto = document.getElementById("produto").value;
        var nome = document.getElementById("nome").value;
        var preco = document.getElementById("preco").value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                loadItems();
            }
        };
        xhr.open("GET", "crud.php?action=update&id=" + selectedProduto + "&nome=" + nome + "&preco=" + preco, true);
        xhr.send();
    }

    function deleteProduto() {
        var selectedProduto = document.getElementById("produto").value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                loadItems();
            }
        };
        xhr.open("GET", "crud.php?action=delete&id=" + selectedProduto, true);
        xhr.send();
    }

    // Preencher o dropdown com produtos ao carregar a página
    window.onload = function() {
        loadItems();
        loadProdutoDropdown();
    };

    function loadProdutoDropdown() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var produtos = JSON.parse(this.responseText);
                var dropdown = document.getElementById("produto");
                dropdown.innerHTML = "<option value=''>-- Selecione um Produto --</option>";
                for (var i = 0; i < produtos.length; i++) {
                    dropdown.innerHTML += "<option value='" + produtos[i].id + "'>" + produtos[i].nome + "</option>";
                }
            }
        };
        xhr.open("GET", "crud.php?action=getProdutos", true);
        xhr.send();
    }
</script>

<!-- ... (parte posterior do código) -->
