<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookies</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="color">Color de fondo:</label>
        <input type="color" name="color" required>

        <button type="submit">Enviar</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $color = $_POST["color"];

    // Guardar datos en cookies
    setcookie("nombre", $nombre, time() + 3600, "/");
    setcookie("color", $color, time() + 3600, "/");

    // Redireccionar a la página resultante
    header("Location: result.php");
}
?>

</body>
</html>
