<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>REPASO 1ª EVALUACIÓN</h1>
    </header>
    <section>
        <nav></nav>
        <main>
		<div>

          <div class="central">

</div><?php
if(!$_GET){
    ?>
<button type="onclick"><a href="./index.php">INICIO</a></button><br>
<h1 style="text-align: center;">EJERCICIO 1</h1>
<title>Validación de DNI</title>
<form action="ej1.php" method="GET">
                <label for="">Introduce número el DNI</label><br>
                <input type="number" name="dni" size="40"><br><br>
                <label for="">Introduce la letra del DNI</label><br>
                <input type="text" name="letra" size="40"><br><br>
                <input type="submit" name="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </form>

  <?php
}else {

 function letraNIF() {
$letrasDNI = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
$dni=$_GET["dni"];
$letra=$_GET["letra"];
    $resto = $dni%23;
    if($letrasDNI[$resto] === $letra) {
      echo("Tu DNI completo es correcto:  $dni$letra");
    } else {
      echo("Letra del DNI incorrecta");
    }
 }
 letraNIF() ;}
  ?>
  </div>
		</main>
        <aside></aside>
    </section>
    <footer></footer>
</body>
</html>
