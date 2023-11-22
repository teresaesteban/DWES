<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="post" action="">
        <label for="numero">Introduce un número entero positivo:</label>
        <input type="text" name="numero" id="numero" required>
        <input type="submit" value="Calcular Resto">
    </form>
    <?php
    if($_REQUEST){
        $numero = $_POST["numero"];

        // Validar si el valor ingresado es un número entero positivo
        if (is_numeric($numero) && $numero >= 0) {
            // Llamar a la función para obtener el mensaje del resto de la división
            $mensaje = obtenerMensajeResto($numero);
            echo "<p>El resto de dividir $numero entre 12 es: $mensaje</p>";
        } else {
            echo "<p>Por favor, ingresa un número entero positivo válido.</p>";
        }
    }

    // Función para obtener el mensaje del resto de la división
    function obtenerMensajeResto($numero) {
        $restos = array("cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once");
        $resto = $numero % 12;
        return $restos[$resto];
    }
    ?>
    <form action="procesar1.php">
</body>
</html>