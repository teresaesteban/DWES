<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function sumadivisores($n) {
    $suma = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $suma += $i;
        }
    }
    return $suma;
}

function esperfecto($n) {
    return $n === sumadivisores($n);
}

// Programa que prueba las funciones
$numero = 28; // Puedes cambiar este número para probar otras entradas

if (esperfecto($numero)) {
    echo "$numero es un número perfecto. Su suma de divisores es " . sumadivisores($numero) . "\n";
} else {
    echo "$numero no es un número perfecto. Su suma de divisores es " . sumadivisores($numero) . "\n";
}

// Encontrar y mostrar los números perfectos entre 1 y 1000
echo "Números perfectos entre 1 y 1000:\n";
for ($i = 1; $i <= 1000; $i++) {
    if (esperfecto($i)) {
        echo "$i es un número perfecto. Su suma de divisores es " . sumadivisores($i) . "\n";
    }
}
?>

</body>
</html>