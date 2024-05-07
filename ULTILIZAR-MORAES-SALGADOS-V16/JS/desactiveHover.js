const cards = document.querySelector("#card1");
const cards2 = document.querySelector("#card2");
const cards3 = document.querySelector("#card3");
const cards4 = document.querySelector("#card4");
const cards5 = document.querySelector("#card5");
const cards6 = document.querySelector("#card6");

const btn = document.querySelector("#desativeEfeito");
const card2 = document.querySelector(".card2");


btn.addEventListener('click', function(){
    if(card2.classList.toggle("nopHover"))
    {
        cards.classList.add('nopHover');
        cards2.classList.add('nopHover');
        cards3.classList.add('nopHover');
        cards4.classList.add('nopHover');
        cards5.classList.add('nopHover');
        cards6.classList.add('nopHover');
    }
    else{
        cards.classList.remove('nopHover');
        cards2.classList.remove('nopHover');
        cards3.classList.remove('nopHover');
        cards4.classList.remove('nopHover');
        cards5.classList.remove('nopHover');
        cards6.classList.remove('nopHover');
    }
})

// function deslig() {
    
// }