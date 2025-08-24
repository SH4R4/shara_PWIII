<?php
date_default_timezone_set('America/Sao_Paulo'); // fuso horário
$data_emissao = date('d/m/Y H:i'); // formato dia/mês/ano hora:minuto
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="dada">
    <div class="alegorias">
    <h1>Carros do Flins</h1>
    <button onclick="window.location.href='forms.php'" class="btn">Cadastrar-se</button>
    <button onclick="window.location.href='consu.php'" class="btn">consultar</button>
        <p>DATA DE EMISSÃO: <?= $data_emissao ?></p>
    </div>
</body>
</html>