<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../includes/metadata2.php"; ?>
</head>
<body>
<?php include "../includes/header2.php"; ?> <!-- Aquí se incluye el contenido.php -->
<?php include "../includes/menu2.php"; ?>

    <div class="contenedor">
    <?php include "../includes/nav_bbdd.php"; ?>

<main>
<?php
if (!$_REQUEST) {
    ?>
    <h3>Login para usuarios registrados</h3>
    <form method="post" action="#">
    <label for="username">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Iniciar sesión">
    <?php
}else{
    $nombre = $_POST["usuario"];
    $clave = $_POST["password"];

    $conexion = mysqli_connect ("localhost", "root", "","jardineria") or die ("No se puede conectar con el servidor");

    $sql="SELECT clave from usuarios where usuario='$nombre'";
	$resulconsulta=mysqli_query($conexion,$sql) or die ("Error al hacer la consulta");
    if ($result->num_rows === 1) {

    }else


	if($resul){
        $_SESSION['logged_in'] = true;
        echo"Bienvenido/a ahora puedes navegar por los datos";
    }else{
        echo"contraseña incorrecta";
    }
	mysqli_close($conexion);
}
?>
</form>
</main>
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>