<?
echo "Digite a distância percorrida (em km): ";
$distancia = trim(fgets(STDIN));
echo "Digite a quantidade de combustível consumida (em litros): ";
$litros = trim(fgets(STDIN)); 

if (is_numeric($distancia) && is_numeric($litros)) {
    $consumoMedio = $distancia / $litros;

    echo "O consumo médio de combustível é: " . number_format($consumoMedio, 2, ',', '.') . " km/l\n";
} else {
    echo "Por favor, insira valores numéricos válidos.\n";
}
