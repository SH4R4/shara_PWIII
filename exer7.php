<? 
echo "Insira o comprimento da caixa: ";
$comp = trim(fgets(STDIN));

echo "Insira a largura da caixa: ";
$largura = trim(fgets(STDIN)); 

echo "Digite a altura da caixa: ";
$altura = trim(fgets(STDIN)); 

if (is_numeric($comp) && is_numeric($largura) && is_numeric($altura)) {
    $volume = $comp * $largura * $altura;
   
    echo "O volume da caixa é: " . number_format($volume, 2, ',', '.') . " m³\n";
} else {
    echo "Por favor, insira valores numéricos válidos.\n";
}
?>
