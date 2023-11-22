<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="telefono">Seleciona el telefono del cliente:</label>
        <select id="Telefono" name="Telefono">
        <?php
            // Conecta a la base de datos
            $conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");

            // Consulta para obtener los códigos de empleado
            $query = "SELECT Telefono FROM clientes";
            $result = mysqli_query($conexion, $query);

            // Muestra las opciones del menú desplegable
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['Telefono'] . "'>" . $row['Telefono'] . "</option>";
            }

            // Cierra la conexión después de obtener los datos necesarios
            mysqli_close($conexion);
            ?>
            <?php
if($_POST){

  // Conecta a la base de datos
  $conexion = mysqli_connect("localhost", "root", "", "jardineria");

  // Obtiene los valores del formulario
  $telefono = $_POST['Telefono'];

  // Consulta para obtener los datos del cliente
  $query = "SELECT * FROM clientes WHERE Telefono='$telefono'";
  $result = mysqli_query($conexion, $query);
  $row = mysqli_fetch_assoc($result);

  // Muestra los datos en inputs para poder modificarlos
  echo "<form method='post'>";
  echo "Nombre: <input type='text' name='Nombre' value='" . $row['Nombre'] . "'><br>";
  echo "Telefono: <input type='text' name='Telefono' value='" . $row['Telefono'] . "' readonly><br>";
  echo "<input type='submit' value='Guardar Cambios'>";
  echo "</form>";

  // Verifica si se enviaron cambios
  if($_POST){
    $nombre = $_POST['Nombre'];
    $telefono = $_POST['Telefono'];

    // Actualiza el registro en la DB
    $query = "UPDATE clientes SET Nombre='$nombre' WHERE Telefono='$telefono'";
    mysqli_query($conexion, $query);

    echo "Datos actualizados";
  }

  mysqli_close($conexion);
}
?>
        </select>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>