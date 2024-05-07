const body = document.body;
const lua = document.querySelector("#lua");
const sol = document.querySelector("#sol");

const luaNuv = document.querySelector("#luaNuv");
const solNuv = document.querySelector("#solNuv");


function modeDark(){
    if(body.classList.contains("ative")){
        body.classList.remove('ative');
        sol.style.display = 'none';
        lua.style.display = 'block'
    }
    else{
        body.classList.add('ative');
        lua.style.display = 'none';
        sol.style.display = 'block';
    }
}

function modeNebulus(){
    if(body.classList.contains("ativeNebus")){
        body.classList.remove('ativeNebus');
        solNuv.style.display = 'none';
        luaNuv.style.display = 'block'
    }
    else{
        body.classList.add('ativeNebus');
        luaNuv.style.display = 'none';
        solNuv.style.display = 'block';
    }
}