<?php
session_start();

// verifica se o usuário fez login
if(!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<script>
    var timeLeft = 10; // tempo restante em segundos
    var countdownTimer = setInterval(function() 
    {
        timeLeft--;
        document.getElementById("timer").innerHTML = "Redirecionando em " + timeLeft + " segundos...";
        if (timeLeft <= 0) {
            clearInterval(countdownTimer);
            window.location.href = "locked.php";
        }
    }, 1000); // atualiza o timer a cada segundo
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Progresso</title>
    <link rel = "stylesheet" href = "style/newstyle.css">
    <script defer src="js/script.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <div class="progress">
        <p class = "texts">Bem-vindo, <?php echo $username; ?>!</p>
        <p id="timer"></p>
    </div>
    <canvas class="mtx" id="matrix"></canvas>
</body>
</html>