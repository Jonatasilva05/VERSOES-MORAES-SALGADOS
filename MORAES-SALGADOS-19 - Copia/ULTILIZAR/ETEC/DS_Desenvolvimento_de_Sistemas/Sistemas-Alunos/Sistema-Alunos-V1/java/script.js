function logar(){
    var login = document.getElementById('user').value;
    var senha = document.getElementById('senha').value;

    if(login == "admin" && senha == "1234")
    {
        alert('Sucesso');
        location.href = "/inicio.html";
    }
    else
    {
        alert('Usuario ou senha inválido')
    }
}