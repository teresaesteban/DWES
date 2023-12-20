<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de Desglose de Euros</h1>
    <form method="post" action="">
        <label for="cantidad">Introduce una cantidad en euros:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>
        <input type="submit" value="Calcular Desglose">
    </form>
    <?php
    if($_REQUEST){
        $numero = $_POST["numero"];
        $cantidad = $_POST["cantidad"];

        if (is_numeric($cantidad) && $cantidad >= 1) {
            $valor = array(500, 200, 100, 50, 20, 10, 5, 2, 1);
            $desglose = array();

            foreach ($valor as $billete) {
                if ($cantidad >= $billete) {
                    $billetes = floor($cantidad / $billete);
                    $desglose[$billete] = $billetes;
                    $cantidad = $cantidad % $billete;
                }
            }

            echo "<p>Mejor desglose para " . $_POST["cantidad"] . " euros:</p>";
            echo "<ul>";
            foreach ($desglose as $billete => $cantidadBilletes) {
                echo "<li>$cantidadBilletes billete(s) de $billete €</li>";
            }
            echo "</ul>";

            echo '<a href="">Calcular otro desglose</a>';
        } else {
            echo "<p>Por favor, ingresa una cantidad válida en euros.</p>";
        }
    }
    ?>
    <form action="procesar2.php">
</body>
</html>