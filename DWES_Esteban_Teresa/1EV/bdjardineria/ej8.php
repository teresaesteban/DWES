<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../includes/metadata2.php"; ?>

</head>
<body>
<?php include "../includes/header2.php"; ?> <!-- Aquí se incluye el contenido.php -->
<?php include "../includes/menu2.php"; ?>


<div class="caja">
    <?php include "../includes/nav_bbdd.php"; ?>
    <main>
     <h1 style="text-align: center;">PEDIDOS CLIENTE</h1>
<?php
if (!isset($_SESSION['logged_in'])) {
    // Si no está logeado, redirigir a la página de inicio de sesión
   echo "Para acceder a esta seccion tienes que iniciar sesion";
    echo'<form action="login.php" method="post">
    <input type="submit" value="Iniciar sesion">
</form>';
}else{
	echo "<h1>Conexión correcta...</h1><br>";

	 echo '<div style="text-align: right; padding: 10px;">
            <span>Bienvenido/a, ' . $_SESSION['nombre'] . '</span>
            <form method="post" action="#">
                <input type="submit" name="eliminar_sesion" value="Cerrar Sesión">
            </form>
          </div>';
		  if ($_REQUEST && isset($_POST['eliminar_sesion'])) {
			session_unset();
			session_destroy();
			header("Location: ej8.php");
			exit();
		}
//Conectamos con bd jardineria
include "conectabd.php";

if (isset($_REQUEST['enviar']))  //Se ha recibido código y nombre del cliente y se procede a obtener y mostrar información de sus pedidos
{
	$menu=$_REQUEST['menu'];
	//1º Mostramos encabezado con el nombre del cliente y su código:
	$datoscli=explode(":",$menu);
	$codigocli=$datoscli[0];
	$nombrecli=$datoscli[1];
	echo "<h1>LISTADO DE PEDIDOS DEL CLIENTE $nombrecli <br>CON CÓDIGO  $codigocli</h1><br>";

	//2º Buscamos los pedidos del cliente cuyo código se ha enviado desde el formulario
	$sql1="SELECT CodigoPedido, FechaPedido FROM pedidos WHERE pedidos.CodigoCliente='$codigocli' ";
	$resulconsultapedidos = mysqli_query ($conexion,$sql1) or die ("Fallo en la consulta de pedidos");

	//3º Para cada pedido mostramos sus datos y luego buscamos sus líneas de detalle
	// y el nombre de cada producto, devolviéndolo todo en una tabla HTML
	$npedidos = mysqli_num_rows ($resulconsultapedidos);
	if($npedidos==0)
		echo "<h1>ESTE CLIENTE NO TIENE REGISTRADO NINGÚN PEDIDO </h1>";
	else {
		for($fp=1;$fp<=$npedidos;$fp++){
			$filapedido = mysqli_fetch_row ($resulconsultapedidos);
			echo "<table>";
			echo "<tr>
					<th colspan='3'>Pedido código ". $filapedido[0]." de fecha ".$filapedido[1]."</th>
				</tr>";
			echo "<tr>
					<th>Nombre del Producto</th>
					<th>Precio Unidad</th>
					<th>Cantidad</th>
				</tr>";

			//Obtenemos todos los detallepedidos y nombres de productos del pedido de código $filapedido[0]
			// y los devolvemos en forma de tabla HTML
			$sql2="SELECT Nombre,PrecioUnidad,Cantidad FROM detallepedidos NATURAL JOIN productos WHERE detallepedidos.CodigoPedido=$filapedido[0]";
			$resulconsultadetallespedido=mysqli_query ($conexion,$sql2) or die ("Fallo en la consulta de detallepedidos y productos");
			$ndetalles = mysqli_num_rows ($resulconsultadetallespedido);

			if ($ndetalles == 0) {
				print "<tr>
						<td colspan='3'>No se han registrado detalles de este pedido</td>
					</tr>";
			}
			else{
				for($fd = 1; $fd <= $ndetalles; $fd++) {
					$filadetalle = mysqli_fetch_row($resulconsultadetallespedido);
					print '<tr>';
					foreach($filadetalle as $columna) {
						echo '<td>',$columna,'</td>';
					}
					print '</tr>';
				}
			}
			echo "</table> <br/>";
		}
	}
}

//Sacamos menu de selección para elegir el cliente
$consulta = mysqli_query ($conexion,"select CodigoCliente,NombreCliente from clientes") or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows ($consulta);
echo "<h1>Selecciona cliente a consultar</h1><br>";
echo "<form  action='ej8.php' method='get'>";
echo "<select name='menu'>";
	for($f=1;$f<=$nfilas;$f++){
		$fila = mysqli_fetch_row ($consulta);
		$datoscli=$fila[0].':'.$fila[1];		//Forma de pasar dos datos en un mismo value y recuperarlos con explode
		echo "<option value='$datoscli'>";
		echo $fila[1];
		echo "</option>";
	}
echo "</select>&nbsp;&nbsp;";
echo "<input type='submit' name='enviar' value='Enviar consulta'>";
echo "</form>";
mysqli_close ($conexion);
}
?>
</main>
    <?php include "../includes/aside2.php"; ?>
</div>
<?php include "../includes/footer2.php"; ?>
</body>
</html>