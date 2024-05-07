/*COXINHAS*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesCox');
    var CoxiFrango = document.getElementById('CoxiFrango');
    var CoxiFraCatu = document.getElementById('CoxiFraCatu');
    var CoxiCarne = document.getElementById('CoxiCarne');
    var CoxiCala = document.getElementById('CoxiCala');
    var CoxiCalaCatu = document.getElementById('CoxiCalaCatu');
    var CoxaPernil = document.getElementById('CoxaPernil');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      CoxiFrango.style.display = 'none';
      CoxiCarne.style.display = 'none';
      CoxiFraCatu.style.display = 'none';
      CoxiCala.style.display = 'none';
      CoxiCalaCatu.style.display = 'none';
      CoxaPernil.style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });


/*BOLINHOS*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesBol');
    var BolPreQue = document.getElementById('BolPreQue');
    var BolCarne = document.getElementById('BolCarne');
    var BolOvo = document.getElementById('BolOvo');
    var BolQueijo = document.getElementById('BolQueijo');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      BolPreQue.style.display = 'none';
      BolCarne.style.display = 'none';
      BolOvo.style.display = 'none';
      BolQueijo.style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });


/*RISOLES*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesRiso');
    var RisoPreQue = document.getElementById('RisoPreQue');
    var RisoCala = document.getElementById('RisoCala');
    var RisoCalaCatu = document.getElementById('RisoCalaCatu');
    var RisoCarne = document.getElementById('RisoCarne');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      RisoPreQue.style.display = 'none';
      RisoCala.style.display = 'none';
      RisoCalaCatu.style.display = 'none';
      RisoCarne.style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });


/*ESFIRRAS*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesEsfi');
    var EsfiFrango = document.getElementById('EsfiFrango');
    var EsfiFraCatu = document.getElementById('EsfiFraCatu');
    var EsfiCala = document.getElementById('EsfiCala');
    var EsfiCalaCatu = document.getElementById('EsfiCalaCatu');
    var EsfiCarne = document.getElementById('EsfiCarne');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      EsfiFrango.style.display = 'none';
      EsfiFraCatu.style.display = 'none';
      EsfiCala.style.display = 'none';
      EsfiCalaCatu.style.display = 'none';
      EsfiCarne.style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });


/*SALSICHA*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesSal');
    var SALSICHA   = document.getElementById('SALSICHA  ');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      SALSICHA  .style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });


/*CROQUETE*/
document.addEventListener('DOMContentLoaded', function() {
    var selectSecoes = document.querySelector('.secoesCroque');
    var CroqueCarne   = document.getElementById('CroqueCarne');
  
    // Adiciona um ouvinte de evento para a mudança na opção selecionada
    selectSecoes.addEventListener('change', function() {
      // Oculta todas as seções
      CroqueCarne  .style.display = 'none';
  
      // Obtém o valor da seção selecionada
      var secaoSelecionada = selectSecoes.value;
  
      // Exibe a seção correspondente à opção selecionada
      document.getElementById(secaoSelecionada).style.display = 'block';
    });
  });