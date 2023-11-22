<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación de Equipos</title>
</head>
<body>
<form method="post" action="">
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo">
        <?php
        $listaEquipos = array(
            "F.C. Barcelona" => 82,
            "Real Madrid" => 84,
            "Atlético Madrid" => 78,
            "Valencia" => 75,
            "Sevilla" => 76,
            "Villarreal" => 60,
            "Málaga" => 50,
            "Espanyol" => 47,
            "Athletic Bilbao" => 55,
            "Celta" => 51,
            "Real Sociedad" => 46,
            "Rayo Vallecano" => 49,
            "Getafe" => 36,
            "Osasuna" => 33,
            "Elche" => 41,
            "Deportivo" => 38,
            "Almería" => 29,
            "Levante" => 37,
            "Granada" => 35,
            "Zaragoza" => 32
        );

        // Ordenar los equipos alfabéticamente por nombre
        ksort($listaEquipos);

        foreach ($listaEquipos as $nombreEquipo => $puntos) {
            echo "<option value=\"$nombreEquipo\">$nombreEquipo</option>";
        }
        ?>
    </select>
    <input type="submit" value="Mostrar Puntos y Posición">
</form>

<?php
if (isset($_POST["equipo"])) {
    $equipoSeleccionado = $_POST["equipo"];
    $posicion = array_search($equipoSeleccionado, array_keys($listaEquipos)) + 1; // +1 para la posición basada en 1 (en lugar de 0)
    $puntos = $listaEquipos[$equipoSeleccionado];
}
?>

<h2>Clasificación de Equipos</h2>
<table border='1'>
    <tr><th>Equipo</th><th>Puntos</th><th>Posición</th></tr>
    <?php
    foreach ($listaEquipos as $nombreEquipo => $puntos) {
        echo "<tr><td>$nombreEquipo</td><td>$puntos</td><td>" . (array_search($nombreEquipo, array_keys($listaEquipos)) + 1) . "</td></tr>";
    }
    ?>
</table>

<?php
if (isset($_POST["equipo"])) {
    echo "<h2>Información del equipo seleccionado:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Equipo</th><th>Puntos</th><th>Posición</th></tr>";
    echo "<tr><td>$equipoSeleccionado</td><td>$puntos</td><td>$posicion</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
