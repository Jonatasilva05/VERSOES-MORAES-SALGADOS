const cards = document.querySelector(".contentMenu.delay1.animate__animated.animate__backInDown");
const cards1 = document.querySelector(".contentMenu.delay2.animate__animated.animate__backInDown");
const cards2 = document.querySelector(".contentMenu.delay3.animate__animated.animate__backInDown");
const cards3 = document.querySelector(".contentMenu.delay4.animate__animated.animate__backInDown");
const cards4 = document.querySelector(".contentMenu.delay5.animate__animated.animate__backInDown");
const cards5 = document.querySelector(".contentMenu.delay6.animate__animated.animate__backInDown");
const checkHeader = document.querySelector("#checkHeader");
const confereHeader = document.querySelector("#confereHeader");

function desactive() {
        if(cards.classList.contains("nopHover")){
                checkHeader.style.display = 'block';
                confereHeader.style.display = 'none';
                cards.classList.remove('nopHover');
                cards1.classList.remove('nopHover');
                cards2.classList.remove('nopHover');
                cards3.classList.remove('nopHover');
                cards4.classList.remove('nopHover');
                cards5.classList.remove('nopHover');
        }
        else
        {
                checkHeader.style.display = 'none';
                confereHeader.style.display = 'block';
                cards.classList.add('nopHover');
                cards1.classList.add('nopHover');
                cards2.classList.add('nopHover');
                cards3.classList.add('nopHover');
                cards4.classList.add('nopHover');
                cards5.classList.add('nopHover');
        }
}





const body = document.body;
const lua = document.querySelector("#lua");
const sol = document.querySelector("#sol");
const luaNuv = document.querySelector("#luaNuv");
const solNuv = document.querySelector("#solNuv");

function modeDark(){
        const html = document.documentElement
        html.classList.toggle('darck')
    
        if(html.classList.contains('darck')) {
                sol.style.display = 'none';
                lua.style.display = 'block'
        }
        else
        {
                lua.style.display = 'none';
                sol.style.display = 'block';
        }
    }

function modeNebulus(){
        if(body.classList.contains("ativeNebus")){
                body.classList.remove('ativeNebus');
                luaNuv.style.display = 'none';
                solNuv.style.display = 'block';
        }
        else{
                body.classList.add('ativeNebus');
                solNuv.style.display = 'none';
                luaNuv.style.display = 'block'
        }
}




