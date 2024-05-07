<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastrar Novo Administrador</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Cadastrar Novo Administrador</h2>
<form action="register_admin_process.php" method="post">
    <label for="username">Nome de Usuário:</label>
    <input type="text" name="username" required><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" required><br>
    <input type="submit" value="Cadastrar Administrador">
</form>

</body>
</html>
