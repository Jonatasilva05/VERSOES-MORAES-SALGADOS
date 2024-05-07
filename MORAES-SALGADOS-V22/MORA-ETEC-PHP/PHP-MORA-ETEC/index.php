<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Feedback</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: feedback_display.php");
    exit;
} else {
    include('login.php');
}
?>


<script src="scripts.js"></script>
</body>
</html>
