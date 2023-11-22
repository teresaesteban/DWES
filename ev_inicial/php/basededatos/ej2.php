<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="gama">Elige la gama</label>
        <select id="gama" name="gama">
            <option value="Aromáticas">Aromáticas</option>
            <option value="Frutales">Frutales</option>
            <option value="Herbáceas">Herbáceas</option>
            <option value="Herramientas">Herramientas</option>
            <option value="Ornamentales">Ornamentales</option>
        </select><br><br>
        <input type="submit" value="Verificar Perfecto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gamaSeleccionada = $_POST["gama"];
        $conexion = mysqli_connect("localhost", "root", "", "jardineria") or die("No se puede conectar con el servidor");
        $instruccion = "SELECT CodigoProducto, Nombre, CantidadEnStock FROM productos WHERE Gama = '$gamaSeleccionada' ORDER BY CodigoProducto";
        $resulConsulta = mysqli_query($conexion, $instruccion) or die("Fallo en la consulta");

        if (mysqli_num_rows($resulConsulta) > 0) {
            echo "<table>";
            echo "<tr><th>Código Producto</th><th>Nombre</th><th>Cantidad en Stock</th></tr>";
            while ($fila = mysqli_fetch_assoc($resulConsulta)) {
                echo "<tr>";
                echo "<td>" . $fila["CodigoProducto"] . "</td>";
                echo "<td>" . $fila["Nombre"] . "</td>";
                echo "<td>" . $fila["CantidadEnStock"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontró ningún producto para la gama $gamaSeleccionada.";
        }
    }
    ?>
</body>
</html>
