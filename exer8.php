<?
echo "Digite o valor: ";
$valor = trim(fgets(STDIN)); // Lê o valor

if (is_numeric($valor)) {
    $desc = $valor * 0.27;

    $valorFinal = $valor - $desc;

    echo "Valor inicial: R$ " . number_format($valor, 2, ',', '.') . "\n";
    echo "Valor do desconto (27%): R$ " . number_format($desc, 2, ',', '.') . "\n";
    echo "Valor final com desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
} else {
    echo "Por favor, insira um valor numérico válido.\n";
}
?>