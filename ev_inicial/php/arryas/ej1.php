<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function generarArrayAleatorio($longitud, $maximo, $minimo) {
        $array = array();
        for ($i = 1; $i <= $longitud; $i++) {
            $numeroAleatorio = rand($minimo, $maximo);
            $array[] = $numeroAleatorio;
        }
        return $array;
    }

    function eliminarRepetidos($array) {
        $arraySinRepetidos = array_unique($array);
        return $arraySinRepetidos;
    }

    function calcularMedia($array) {
        $array_suma = array_sum($array);
        $longitud = count($array);
        $resultado = $array_suma / $longitud;
        return $resultado;
    }

    $nuevo_array = generarArrayAleatorio(50, 100, 1);
    $unique = eliminarRepetidos($nuevo_array);
    $media = calcularMedia($unique);

    echo "Array aleatorio: ";
    print_r($nuevo_array);
    echo "<br>";

    echo "Array sin repetidos: ";
    print_r($unique);
    echo "<br>";

    echo "Media: " . $media;
    ?>

</body>
</html>
