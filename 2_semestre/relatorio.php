<?php
include 'connection.php';

//porcentagem de correção
$correcao = 0.2;

// todos os veículos ordenados por valor
$stmt = $conn->prepare("SELECT * FROM auto ORDER BY valor ASC");
$stmt->execute();
$veiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Data de emissão
date_default_timezone_set('America/Sao_Paulo');
$data_emissao = date('d/m/y H:i');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Relatório - Carros do Flins</title>
<style>
    body { font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color: #2B3145ff; padding: 20px; }
    h2 { text-align: center; color: #D0D9E6;; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; color: #D0D9E6; }
    th, td { border: 1px solid #ffffffff; padding: 8px; text-align: center; }
    th { background-color: hsla(232, 19%, 41%, 1);}
    p {color: #D0D9E6;}
</style>
</head>
<body>

<h2>RELATÓRIO - Carros do Flins</h2>
<p>DATA EMISSÃO: <?= $data_emissao ?></p>
<p>Ordem de: Valor &nbsp;&nbsp; Correção: <?= $correcao * 100 ?>%</p>

<table>
    <tr>
        <th>Modelo</th>
        <th>Placa</th>
        <th>Ano</th>
        <th>Cor</th>
        <th>Valor</th>
        <th>Valor Corrigido</th>
    </tr>
    <?php foreach ($veiculos as $v): ?>
        <tr>
            <td><?= $v['modelo'] ?></td>
            <td><?= $v['placa'] ?></td>
            <td><?= $v['ano'] ?></td>
            <td><?= $v['cor'] ?></td>
            <td><?= number_format($v['valor'], 2, ',', '.') ?></td>
            <td><?= number_format($v['valor'] * (1 + $correcao), 2, ',', '.') ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<button class="btn-voltar" onclick="window.location.href='index.php'">Voltar</button>
</body>
</html>
