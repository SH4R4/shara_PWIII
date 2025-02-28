<?
echo "Digite o valor do produto: ";
$valp = trim(fgets(STDIN));

if (is_numeric($valp)) {
    // Calcula o acréscimo de 16%
    $acre = $valp * 0.16;
    $valt = $valp + $acre;

    // Divide o valor total em 10 parcelas
    $valorParcela = $valt / 10;

    // Exibe os resultados
    echo "Valor do produto: R$ " . number_format($valp, 2, ',', '.') . "\n";
    echo "Acréscimo de 16%: R$ " . number_format($acre, 2, ',', '.') . "\n";
    echo "Valor total da compra: R$ " . number_format($valt, 2, ',', '.') . "\n";
    echo "Valor de cada parcela (10x): R$ " . number_format($valorParcela, 2, ',', '.') . "\n";
} else {
    echo "Por favor, insira um valor numérico válido.\n";
}

