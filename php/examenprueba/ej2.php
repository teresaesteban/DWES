<!DOCTYPE html>
<html lang="es">
<head>
    <title>Hoja 3. Ejercicio 1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>TABLAS DE NÚMEROS NATURALES</h1>
    </header>
    <section>
        <nav></nav>
        <main>
		<div>
<button type="onclick"><a href="./index.php">INICIO</a></button><br>
<h1 style="text-align: center;">EJERCICIO 2</h1>
<h1>Tabla de n filas y m columnas</h1>
 <form class="borde"action="ej2.php" method="GET">
                <label for="">Introduce el número de filas de la tabla</label><br>
                <input type="number" name="n" size="400"><br><br>
                <label for="">Introduce el número de columnas de la tabla</label><br>
                <input type="number" name="m" size="400"><br><br>
                <input type="submit" name="submit" value="Enviar">
            </form>
            <?php


$n=$_GET["n"];
$m=$_GET["m"];
function tablaNxM($n,$m)
{
    echo "<h1>TABLA HTML DE $n x $m</h1>";
    echo "<table border='1'>";
    $numero=1;
    for ($i=1;$i<=$n;$i++)
    {
        echo '<tr>' ;
        for ($j=1;$j<=$m;)
        {

            if(esprimo($numero)){
                echo '<td>';
                echo $numero;
                $numero++;
                echo '</td>';
                $j++;
            }
            $numero++;
        }

    }
    echo "</table>";
}

function esprimo($x){
   if ($x == 1) {
        return false;
    }elseif ($x == 2) {
        return true;
    }else{
        for ($i = 2; $i <= $x/2; $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
tablaNxM($n, $m);

?>
        </div>
		</main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>