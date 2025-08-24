<?php
date_default_timezone_set('America/Sao_Paulo'); // fuso horário
$data_emissao = date('d/m/Y H:i'); // formato dia/mês/ano hora:minuto

include 'connection.php';

// Atualizar valor se o formulário de alteração foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['novo_valor'], $_POST['id'])) {
    $id = $_POST['id'];
    $novo_valor = $_POST['novo_valor'];

    $stmt = $conn->prepare("UPDATE auto SET VA = ? WHERE id = ?");
    $stmt->bindParam(1, $novo_valor);
    $stmt->bindParam(2, $id);
    $stmt->execute();

    echo "<script>alert('Valor atualizado com sucesso!');</script>";
}

// Buscar todos os veículos
$stmt = $conn->prepare("SELECT * FROM auto ORDER BY id ASC");
$stmt->execute();
$veiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Veículos</title>
    <style>
        body {
             font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #2B3145;
            color: #D0D9E6;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgb(38, 44, 63);;
        }
        th, td {
            padding: 8px;
            border: 1px solid #D0D9E6;
            text-align: center;
        }
        th {
            background-color: hsla(232, 19%, 41%, 1);
        }
        input[type="number"] {
            width: 80px;
        }
        button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #A8B6E3ff;
        }
    
    </style>
</head>
<body>

<h2>Consulta de Veículos</h2>
    <p>DATA DE EMISSÃO: <?= $data_emissao ?></p>

<table>
    <tr>
        <th>ID</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Cor</th>
        <th>Placa</th>
        <th>Valor</th>
        <th>Valor Corrigido (VA)</th>
        <th>Alterar Valor</th>
    </tr>

    <?php foreach ($veiculos as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= $v['modelo'] ?></td>
            <td><?= $v['ano'] ?></td>
            <td><?= $v['cor'] ?></td>
            <td><?= $v['placa'] ?></td>
            <td><?= number_format($v['valor'], 2, ',', '.') ?></td>
            <td><?= isset($v['VA']) ? number_format($v['VA'], 2, ',', '.') : '' ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $v['id'] ?>">
                    <input type="number" step="0.01" name="novo_valor" placeholder="Novo VA" required>
                    <button type="submit">Atualizar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<button onclick="window.location.href='index.php'">Voltar</button>
<button onclick="window.location.href='relatorio.php'">Relatorio</button>

</body>
</html>
