<?php
session_start();


if (isset($_SESSION['user_id'])) {
    echo '<form action="logout.php" method="post"><button type="submit" name="logout">Logout</button></form>';
    echo '<form action="feedback_display.php" method="post"><button type="submit" name="feedback-display">Avaliações/Reclamações</button></form>';
}
?>

<div class="feedback-form">
    <h2>Enviar Feedback</h2>
    <form action="submit_feedback.php" method="post">
        <label for="feedback_type">Tipo de Feedback:</label>
        <select name="feedback_type" id="feedback_type">
            <option value="avaliacao">Avaliação</option>
            <option value="reclamacao">Reclamação</option>
            <option value="sugestao">Sugestão</option>
        </select><br><br>
        <label for="feedback_message">Mensagem:</label><br>
        <textarea name="feedback_message" id="feedback_message" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</div>
