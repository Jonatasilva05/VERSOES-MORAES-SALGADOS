function logar(){
    var login = document.getElementById('mail').value;
    var senha = document.getElementById('senha').value;

    if(login == "admin" || login == "adm" && senha == "1234")
    {
        alert('Sucesso');
        location.href = "index.php";
    }
    else
    {
        alert('Usuario ou senha inválido')
    }
}