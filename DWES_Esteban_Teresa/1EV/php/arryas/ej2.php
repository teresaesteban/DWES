<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function devuelvedatos($array) {
        echo '<table>';
        foreach ($array as $clave => $valor) {
            echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
        }
        echo '</table>';
    }

    function mostrarArrayOrdenadoPorValor($array) {
        arsort($array); // Ordenar el array en orden descendente por valor
        echo '<table>';
        foreach ($array as $clave => $valor) {
            echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
        }
        echo '</table>';
    }

    function mostrarArrayOrdenadoPorClave($array) {
        ksort($array); // Ordenar el array por clave
        echo '<table>';
        foreach ($array as $clave => $valor) {
            echo '<tr><td>' . $clave . '</td><td>' . $valor . '</td></tr>';
        }
        echo '</table>';
    }

    $datosCiudades = array(
        'Nueva York' => 8175133,
        'Los Ángeles' => 3792621,
        'Chicago' => 2695598,
        'Houston' => 2100263,
        'Phoenix' => 1445632
    );

    echo '<h2>Datos de población original:</h2>';
    devuelvedatos($datosCiudades);

    echo '<h2>Datos de población ordenados por valor (descendente):</h2>';
    mostrarArrayOrdenadoPorValor($datosCiudades);

    echo '<h2>Datos de población ordenados por clave:</h2>';
    mostrarArrayOrdenadoPorClave($datosCiudades);
    ?>

</body>
</html>

