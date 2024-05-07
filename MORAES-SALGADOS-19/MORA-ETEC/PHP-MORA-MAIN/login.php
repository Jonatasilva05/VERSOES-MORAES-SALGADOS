<div class="login-form">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Não tem uma conta? <a href="register.php">Registrar-se</a></p>
    <?php
    echo '<form action="register_admin.php" method="post"><button type="submit" name="register_admin">admi</button></form>';
    ?>
</div>
