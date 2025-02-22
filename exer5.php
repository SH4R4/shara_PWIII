<?php
echo "Digite sua altura (em metros): ";
$altura = trim(fgets(STDIN));

echo "Digite seu peso (em quilogramas): ";
$peso = trim(fgets(STDIN)); 

if (is_numeric($altura) && is_numeric($peso)) {
    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "\n";

    if ($imc < 18.5) {
        echo "Classificação: Magreza\n";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "Classificação: Normal\n";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "Classificação: Sobrepeso\n";
    } elseif ($imc >= 30 && $imc < 34.9) {
        echo "Classificação: Obesidade Grau I\n";
    } elseif ($imc >= 35 && $imc < 39.9) {
        echo "Classificação: Obesidade Grau II\n";
    } else {
        echo "Classificação: Obesidade Grau III\n";
    }
} else {
    echo "Por favor, insira valores numéricos válidos.\n";
}