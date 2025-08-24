<?php
date_default_timezone_set('America/Sao_Paulo'); // fuso horário
$data_emissao = date('d/m/Y H:i'); // formato dia/mês/ano hora:minuto
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Carros do flins</title>
</head>
<body class="mana">
    <DIV class="MC">
        <div class="rc">
            <h1>Kyryll mecanica cadastro</h1>
            <form class="fm" method="post" action="./cad.php">
                <label for="Y" >Ano:</label> 
                <input type="number" name="ano" placeholder="2013" required class="btz"> <br>

                <label for="C">Cor:</label>
                <input type="text" name="cor" placeholder="Azul Goiaba" required class="btz"> <br>

                <label for="M">Modelo:</label>
                <input type="text" name="modelo" placeholder="Keliluo" required class="btz"> <br>

                <label for="P">Placa:</label>
                <input type="text" name="placa" placeholder="BRA7S13" required class="btz"> <br>

                <label for="V">Valor:</label>
                <input type="number" name="valor" placeholder="90000.00" required class="btz"> <br>

                 <button type="submit" class="btz ctz">Gravar</button>
                <button type="reset" class="btz ctz">Limpar</button>
                <button type="button" onclick="window.location.href='index.php'" class="btz ctz">Voltar</button>

            </form>
        </div>
        <h5 class="cs"> <Em>Um apoio Kyryll Chudomirovich Flins <br> "Tenho medo de que voce encontrou a pessoa errada." </Em>
        <br> <span>DATA EMISSÃO: <?= $data_emissao ?> </span></h5> 
    </DIV>
</body>
</html>