<?php
include 'config.php';

$sql = "SELECT * FROM clienteslista";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Compras</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["item"] . "</li>";
            }
        } else {
            echo "A lista de compras está vazia.";
        }
        ?>
    </ul>
</body>
</html>

<?php
$conn->close();
?>
