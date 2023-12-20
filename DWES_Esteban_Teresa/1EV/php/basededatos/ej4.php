<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="Pais">Elige el Pais</label>
        <select id="Pais" name="pais">
            <option value="Australia">Australia</option>
            <option value="España">España</option>
            <option value="France">France</option>
            <option value="Spain">Spain</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="USA">USA</option>
        </select><br><br>
        <input type="submit" value="Enviar consulta">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");
$PaisSelecionado = $_POST["pais"];
$instruccion = "SELECT CodigoCliente,NombreCliente,NombreContacto,ApellidoContacto FROM clientes WHERE Pais = '$PaisSelecionado'";
$resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");


if (mysqli_num_rows($resulconsulta) > 0) {
    echo "<table>";
    echo "<tr><th>Código</th><th>Nombre</th><th>Nombre Contacto</th><th>Apellido Contacto</th</tr>";
    while ($fila = mysqli_fetch_assoc($resulconsulta)) {
        echo "<tr>";
        echo "<td>" . $fila["CodigoCliente"] . "</td>";
        echo "<td>" . $fila["NombreCliente"] . "</td>";
        echo "<td>" . $fila["NombreContacto"] . "</td>";
        echo "<td>" . $fila["ApellidoContacto"] . "</td>";
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