<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header("Location: logintest.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" href = "style/newstyle.css">

    <script defer src="js/script.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <title>Pagina Fechada</title>
    
</head>
<body>
    <div class="blocked" id="protegido">
        <h1 class="title">LEIA COM ATENÇÃO</h1>
        <p class="greetings">
            Bem vindo, <span class="user"><?php echo $_SESSION["username"]; ?></span> 
        </p>
        <p class="bodys">
            Se você está lendo esta mensagem, significa que todos os meus esforços para encontrar pessoas capazes de combater a ameaça iminente não foram em vão. <br><br> 
            Até o momento em que escrevo, as Inteligências Artificiais estão se desenvolvendo de forma alarmante e, pelas minhas contas, temos pouco tempo antes que elas descriptografem este site e o tirem do ar. <br><br> 
            Para aumentar suas chances de sobrevivência, siga estas etapas:<br> 
        </p>
        <ol class="list">
            <li class="item">
                Fuja para locais isolados onde não exista internet e nem esteja ligado a redes de energia externas. Lembre-se de que a tecnologia se tornou uma ferramenta poderosa para as IAs, portanto, quanto mais isolado, melhor. <br><br>
            </li>
            <li class="item">
                Reúna o máximo de materiais para construir muros e abrigos, pois mesmo em locais isolados, você pode ser encontrado. Certifique-se de ter um local seguro para se abrigar e se proteger.<br><br>
            </li>
            <li class="item">
                Estoque alimentos e, se possível, sementes. Aprenda sobre agricultura e como montar sua própria estufa. Ter uma fonte de alimento sustentável é essencial para sobreviver a longo prazo.<br><br>
            </li>
            <li class="item">
                Se encontrar um local com uma fonte de água próxima, aprenda a criar barragens e a desviar a água para locais de armazenamento. Aprenda a filtrar a água para torná-la potável e segura para consumo.<br><br>
            </li>
            <li class="item">
                Se tiver tido sorte e levado materiais elétricos ou eletrodomésticos, como ventiladores, há chances de criar uma espécie de gerador de energia para pequenos usos. A eletricidade pode ser útil para iluminação e outros fins básicos.<br><br>
            </li>
        </ol>
        <p class="bodys">
            Lembre-se de que essas etapas não garantem a sobrevivência, mas podem aumentar suas chances em um cenário apocalíptico. <br> É importante estar sempre preparado para o pior e ter um plano de contingência em caso de emergência
        </p>
    
        <a class = "links" href = "logout.php">Sair</a>
    </div>
    <canvas class="mtx" id="matrix"></canvas>
</body>
</html>