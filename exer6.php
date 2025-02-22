<?php
echo "Digite o valor do produto: ";
$valpo = trim(fgets(STDIN));

if (is_numeric($valpo)) {
    $desconto = $valpo * 0.07;

    $valorFinal = $valpo - $desconto;

    echo "Valor inicial do produto: R$ " . number_format($valpo, 2, ',', '.') . "\n";
    echo "Valor do desconto (7%): R$ " . number_format($desconto, 2, ',', '.') . "\n";
    echo "Valor final com desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
} else {
    echo "Por favor, insira um valor numérico válido.\n";
}
?>