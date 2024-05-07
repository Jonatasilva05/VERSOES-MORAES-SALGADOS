<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Avaliações e Reclamações</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="feedback-display">
    <h2>Avaliações e Reclamações</h2>
    <ul>
        <?php
        // Conecta ao banco de dados (substitua essas informações pelos seus próprios dados de conexão)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "feedback_system";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }

        // Consulta SQL para selecionar todas as avaliações e reclamações
        $sql = "SELECT * FROM feedback WHERE feedback_type IN ('avaliacao', 'reclamacao')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibe os resultados
            while($row = $result->fetch_assoc()) {
                echo "<li><strong>Tipo:</strong> " . $row["feedback_type"] . " - <strong>Mensagem:</strong> " . $row["feedback_message"] . "</li>";
                echo "<br><br><br>";
                echo '<form action="logout.php" method="post"><button type="submit" name="logout">Logout</button></form>';
                echo "<br><br><br>";
                echo '<form action="feedback_form.php" method="post"><button type="submit" name="feedback-display">Avaliar/Reclamar</button></form>';
            }
        } else {
            echo "Não há avaliações ou reclamações no momento.";
            echo "<br><br><br>";
            echo '<form action="logout.php" method="post"><button type="submit" name="logout">Logout</button></form>';
            echo "<br><br><br>";
            echo '<form action="feedback_form.php" method="post"><button type="submit" name="feedback-display">Avaliar/Reclamar</button></form>';
        }
        
        $conn->close();
        
        ?>

</body>
</html>
