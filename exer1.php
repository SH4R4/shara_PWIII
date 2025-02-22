<?php
if (isset($_GET['val1']) && isset($_GET['val2']) && isset($_GET['val3'])) {
    $val1 = $_GET['val1'];
    $val2 = $_GET['val2'];
    $val3 = $_GET['val3'];

    $me = ($val1 + $val2 + $val3) / 3;

    echo "A média dos números $val1, $val2 e $val3 é: $me";
} else {
    echo "insira os três números.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <form method="GET" action="">
        <label for="val1">Número 1:</label>
        <input type="number" id="val1" name="val1" required><br><br>

        <label for="val2">Número 2:</label>
        <input type="number" id="val2" name="val2" required><br><br>

        <label for="val3">Número 3:</label>
        <input type="number" id="val3" name="val3" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>