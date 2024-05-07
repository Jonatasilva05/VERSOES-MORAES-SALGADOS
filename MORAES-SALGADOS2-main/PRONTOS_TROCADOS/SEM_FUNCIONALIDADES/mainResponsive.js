/*FAZ O MAIN SE TORNAR ACTIVE ASSIM ATIVANDO A RESPONSIVIDADE DO SITE COM O FRONT ORIGINAL FEITO A MÃO O SEM EFEITO TRANSLATIVO*/
const main = document.querySelector('#main');

window.addEventListener('resize', () => {
	if(main.offsetWidth <= 991){
		main.classList.add('active');
	}
	else{
		main.classList.remove('active');
	}
})