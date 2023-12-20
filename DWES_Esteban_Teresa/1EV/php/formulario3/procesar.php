<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php

$valorDolares = $_GET["dolares"];
$valorLibras = $_GET["libras"];

echo "<p>Tabla de conversión de 1 a 10 euros:</p>";

echo "<table>";
echo "<tr><th>Euros</th><th>Dólares USA</th><th>Libras Esterlinas</th></tr>";

for ($euros = 1; $euros <= 10; $euros++) {
    $conversionDolares = $euros * $valorDolares;
    $conversionLibras = $euros * $valorLibras;
    echo "<tr><td>$euros</td><td>$conversionDolares</td><td>$conversionLibras</td></tr>";
}

echo "</table>";

?>
<p><a href="formulario.html"><br>Volver a realizar la conversión</br></a></p>
</body>
</html>