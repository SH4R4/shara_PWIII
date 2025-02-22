<?php
echo "Digite o primeiro número: ";
$num1 = trim(fgets(STDIN)); 

echo "Digite o segundo número: ";
$num2 = trim(fgets(STDIN)); 

if (is_numeric($num1) && is_numeric($num2)) {
    $quadrado1 = $num1 * $num1;
    $quadrado2 = $num2 * $num2;

    // Soma os quadrados
    $somaQuadrados = $quadrado1 + $quadrado2;

    // Exibe os resultados
    echo "O quadrado de $num1 é: $quadrado1\n";
    echo "O quadrado de $num2 é: $quadrado2\n";
    echo "A soma dos quadrados é: $somaQuadrados\n";
} else {
    echo "Por favor, insira valores numéricos válidos.\n";
}
?>