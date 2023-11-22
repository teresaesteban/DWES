<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Monedas</title>
</head>
<body>
    <h1>Conversor de Monedas</h1>
    <form action="" method="post">
        <label for="valor_euros">Cantidad en Euros:</label>
        <input type="text" id="valor_euros" name="valor_euros" required>
        <label for="divisa_salida">Convertir a:</label>
        <select id="divisa_salida" name="divisa_salida">
            <option value="dolares">Dólares</option>
            <option value="libras">Libras</option>
        </select>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_euros = $_POST["valor_euros"];
        $divisa_salida = $_POST["divisa_salida"];

        if ($divisa_salida == "dolares") {
            $tasa_cambio = 1.0543;
            $divisa = "Dólares";
        } elseif ($divisa_salida == "libras") {
            $tasa_cambio = 0.8678;
            $divisa = "Libras";
        } else {
            echo "Divisa no válida. Por favor, elija entre 'Dólares' o 'Libras'.";
            exit;
        }

        if (!is_numeric($valor_euros) || $valor_euros < 0) {
            echo "El valor en euros debe ser un número positivo.";
        } else {
            $valor_convertido = $valor_euros * $tasa_cambio;
            echo "{$valor_euros} € equivalen a {$valor_convertido} {$divisa}.";
        }
    }
    ?>
</body>
</html>
