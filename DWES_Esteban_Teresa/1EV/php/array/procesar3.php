<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Promedio de Temperaturas</title>
</head>
<body>
    <h1>Resultado del Promedio de Temperaturas</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['temperaturas'])) {
        $temperaturas = $_POST['temperaturas'];

        if (count($temperaturas) == 7) {
            // Calcula el promedio de temperaturas
            $total = array_sum($temperaturas);
            $promedio = $total / count($temperaturas);

            echo "Las temperaturas ingresadas fueron:<br>";
            foreach ($temperaturas as $indice => $temperatura) {
                echo "Día " . ($indice + 1) . ": $temperatura °C<br>";
            }

            echo "<p>El promedio de temperaturas de la semana es: $promedio °C</p>";
        } else {
            echo "<p>Debes ingresar exactamente 7 temperaturas.</p>";
        }
    } else {
        echo "<p>Por favor, ingresa las temperaturas primero.</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
