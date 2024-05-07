const form = document.querySelector('form');
const numeroInput = document.querySelector('#numero');
const resultadoDiv = document.querySelector('#resultado');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const numero = Number(numeroInput.value);
  const resultado = numero * 50;

  resultadoDiv.textContent = `O valor total dos dias é de: R$${resultado}.`;
});