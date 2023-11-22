<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function esprimo($numero) {
    if ($numero <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }

    if ($numero <= 3) {
        return true; // 2 y 3 son primos
    }

    if ($numero % 2 == 0 || $numero % 3 == 0) {
        return false; // Los múltiplos de 2 o 3 no son primos
    }

    $i = 5;
    while ($i * $i <= $numero) {
        if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
            return false; // Si es divisible por algún número mayor a 3, no es primo
        }
        $i += 6;
    }

    return true; // Si no se encontraron divisores, es primo
}

// Ejemplos de uso:
$numero = 17;
if (esprimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}

?>
</body>
</html>
