<?php
echo "Digite um valor: ";
$valor = trim(fgets(STDIN)); 

if (is_numeric($valor)) {

    $por5 = $valor * 0.05;
    $por50 = $valor * 0.50;

    echo "5% de $valor é: $porcentagem5\n";
    echo "50% de $valor é: $porcentagem50\n";
} else {
    echo "Por favor, insira um valor numérico válido.\n";
}
?>
