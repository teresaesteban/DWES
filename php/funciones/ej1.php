<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
tabla(5, 7);
tabla(6,3);
tabla(10,10);
tabla(2,15);

function tabla($filas, $columnas) {
    echo "<table border='1'>";
    $numero = 1;
    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>" . $numero . "</td>";
            $numero++;
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
