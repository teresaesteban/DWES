<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "jardineria") or die("No se puede conectar con el servidor");
        $instruccion = "SELECT Gama, DescripcionTexto FROM gamasproductos WHERE Gama = '$gamaSeleccionada'";
        $resulConsulta = mysqli_query($conexion, $instruccion) or die("Fallo en la consulta");


    ?>
</body>
</html>
