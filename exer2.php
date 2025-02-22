<?php
echo "Digite um valor: ";
$valor = trim(fgets(STDIN));

if (is_numeric($valor)) {

    $por15 = $valor * 0.15;

    echo "15% de $valor é: $por15\n";
} else {
    echo "Por favor, insira um valor numérico válido.\n";
}
?>
