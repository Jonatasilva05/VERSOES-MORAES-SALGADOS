document.getElementById('addItemForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const item = document.getElementById('item').value;
    const quantidade = document.getElementById('quantidade').value;
    const sabor = document.getElementById('sabor').value;
    addItemToList(item, quantidade, sabor);
    document.getElementById('item').value = '';
    document.getElementById('quantidade').value = '';
    document.getElementById('sabor').value = '';
});

document.getElementById('addComboForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const quantidadeCombo = document.getElementById('quantidadeCombo').value;
    const quantidadeTipos = document.getElementById('quantidadeTipos').value;
    addComboToList(quantidadeCombo, quantidadeTipos);
    document.getElementById('quantidadeCombo').value = '';
    document.getElementById('quantidadeTipos').value = '';
});

function addItemToList(item, quantidade, sabor) {
    const listaCompras = document.getElementById('listaCompras');
    const newItem = document.createElement('div');
    newItem.textContent = `${quantidade} ${item} - ${sabor}`;
    listaCompras.appendChild(newItem);
}

function addComboToList(quantidadeCombo, quantidadeTipos) {
    const listaCompras = document.getElementById('listaCompras');
    const newItem = document.createElement('div');
    newItem.textContent = `${quantidadeCombo} Combos - ${quantidadeTipos} tipos de salgados ou sabores`;
    listaCompras.appendChild(newItem);
}
