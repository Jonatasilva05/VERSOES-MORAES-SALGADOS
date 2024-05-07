document.addEventListener('DOMContentLoaded', function () {
    const mainFab = document.getElementById('mainFab');
    const options = document.querySelector('.options');
  
    mainFab.addEventListener('click', function () {
      options.style.display = options.style.display === 'block' ? 'none' : 'block';
    });
  });
  