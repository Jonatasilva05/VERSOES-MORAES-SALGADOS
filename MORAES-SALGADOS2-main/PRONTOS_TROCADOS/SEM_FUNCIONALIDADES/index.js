document.addEventListener("DOMContentLoaded", function () {
    // Verifica se a mensagem já foi exibida usando local storage
    if (!localStorage.getItem('mensagemExibida')) {
      exibirMensagem();
  
      // Marca a mensagem como exibida no local storage
      localStorage.setItem('mensagemExibida', 'true');
    }
  });
  
  function exibirMensagem() {
    // Cria a caixa de mensagem
    var messagebox = document.createElement('div');
    messagebox.classList.add('message-box');
    messagebox.innerHTML = '<form>  <h2>Bem-vindo à nossa página!</h2> <p>Deseja fazer seu primeiro cadastro!?</p>  <label>Digite seu Nome:<label>  <input type="text" placeholder="Digite seu Nome: ">  <br> <label>Digite seu Sobrenome</label>  <input type="text" placeholder="Digite seu sobrenome: ">  <br>   <input type="date">  <button onclick="fecharMensagem()">Fechar</button>  </form>';
  
    // Adiciona a caixa de mensagem ao corpo do documento
    document.body.appendChild(messagebox);
  }
  
  // Função para fechar a mensagem
  function fecharMensagem() {
    var messagebox = document.querySelector('.message-box');
    // Remove a caixa de mensagem
    messagebox.parentNode.removeChild(messagebox);
  }
  



// document.addEventListener("DOMContentLoaded", function () {
//     // Cria a caixa de mensagem
//     var messagebox = document.createElement('div');
//     messagebox.classList.add('message-box');
//     messagebox.innerHTML = '<p>Bem-vindo à nossa página!</p><button onclick="fecharMensagem()">Fechar</button>';
  
//     // Adiciona a caixa de mensagem ao corpo do documento
//     document.body.appendChild(messagebox);
//   });
  
//   // Função para fechar a mensagem
//   function fecharMensagem() {
//     var messagebox = document.querySelector('.message-box');
//     // Remove a caixa de mensagem
//     messagebox.parentNode.removeChild(messagebox);
//   }
  