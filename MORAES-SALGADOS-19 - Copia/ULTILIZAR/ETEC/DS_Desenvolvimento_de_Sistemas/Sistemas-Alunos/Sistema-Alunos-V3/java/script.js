function logar(){
    var login = document.getElementById('user').value;
    var senha = document.getElementById('senha').value;

    if(login == "admin" || login == "adm" && senha == "1234")
    {
        alert('Conectado com Sucesso');
        location.href = "./inicio.html";
    }
    else
    {
        alert('Usuario ou senha inválido')
    }
}