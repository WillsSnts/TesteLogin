<?php
	session_start();

	$usuario = "Usuario";
	$senha = "senha";

	if(isset($_POST["username"]) && isset($_POST["password"])) // verifica se o formulário foi submetido
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		// verifica se o nome de usuário e a senha estão corretos
		if($username == $usuario && $password == $senha)
		{
			$_SESSION["username"] = $username;
			header("Location: progress.php");
			exit();
		}
		else
		{
			$error_message = "Usuário ou senha incorretos.";
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style/newstyle.css">
    <script defer src="js/script.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
	<title>Tela Login</title>	
</head>
<body>
	<div class="login">
		<h1 class = "titlelogin">Tela de Login</h1>
		<?php if(isset($error_message)): ?>
			<p class = "error"><?php echo $error_message; ?></p>
		<?php endif; ?>
		<form action = "" method="post">
			<label for = "username" >Usuário:</label>
			<input type = "text" id = "username" name = "username" placeholder = "Digite seu usuário">
			<label for = "password" >Senha:</label>
			<input type = "password" id = "password" name = "password" placeholder = "Digite sua senha">
			<input type = "submit" name="submit" value = "Entrar">
		</form>
	</div>
	<canvas class="mtx" id="matrix"></canvas>
</body>
</html>
