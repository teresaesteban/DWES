<!DOCTYPE html>
<html lang="es">
<head>
    <title>Hoja 2. Ejercicio 3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>

    </header>
    <section>
        <nav></nav>
        <main>
            <div>
                <?php
                function tabla($n, $m)
                {
                    echo "<table border='1'>";
                    $numero = 1; // Inicializamos la variable $numero
                    for ($i = 1; $i <= $n; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $m; $j++) {
                            echo "<th>$numero</th>";
                            $numero++;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
				echo"<h1>TABLA DE 5*7";
                tabla(5, 7);
				echo"<h1>TABLA DE 10*10";
                tabla(10, 10);
				echo"<h1>TABLA DE 6*3";
                tabla(6, 3);
				echo"<h1>TABLA DE 2*15";
                tabla(2, 15);
                ?>
            </div>
        </main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>
