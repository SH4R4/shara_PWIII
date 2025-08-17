<?php 
$ano = $_POST ['ano'] ?? '';
$cor = $_POST ['cor']  ?? '';
$modelo = $_POST ['modelo']  ?? '';
$placa = $_POST ['placa']  ?? '';
$valor = $_POST ['valor']  ?? '';
$DA = date('Y-m-d H:i:s');

include 'connection.php';


// Verifica se a placa já existe
$stmt = $conn->prepare("SELECT placa FROM auto WHERE placa = ?");
$stmt->bindParam(1, $placa);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'] ?? '';
    $ano = $_POST['ano'] ?? '';
    $cor = $_POST['cor'] ?? '';
    $placa = $_POST['placa'] ?? '';
    $valor = $_POST['valor'] ?? '';

    if ($modelo && $ano && $cor && $placa && $valor) {
        // Verifica placa
        $stmt = $conn->prepare("SELECT placa FROM auto WHERE placa = ?");
        $stmt->bindParam(1, $placa);
        $stmt->execute();

        if (!$stmt->fetch()) {
            // Inserir
            $stmt = $conn->prepare("INSERT INTO auto (modelo, ano, cor, placa, valor) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$modelo, $ano, $cor, $placa, $valor]);
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='consu.php';</script>";
        } else {
            echo "<script>alert('Placa já cadastrada'); window.location.href='index.html';</script>";
        }
    } else {
        echo "<script>alert('Preencha todos os campos por favor'); window.location.href='index.html';</script>";
    }
}


?>