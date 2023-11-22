<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$conexion = new mysqli("localhost", "root", "", "jardineria");

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si la tabla existe
$resultado = $conexion->query("SELECT * FROM information_schema.tables WHERE table_name = 'usuarios'");

if ($resultado->num_rows == 0) {
    // La tabla no existe, se puede crear
    $sql = "CREATE TABLE usuarios (
        nombre VARCHAR(50) NOT NULL,
        clave VARCHAR(255) NOT NULL,
        PRIMARY KEY (nombre)
    ) ENGINE=InnoDB";

    if ($conexion->query($sql) === TRUE) {
        echo "Tabla usuarios creada correctamente";
    } else {
        echo "Error al crear la tabla usuarios: " . $conexion->error;
    }
}

$usuarios = array(
    "jardinero" => "jardinero",
    "cristina" => "cristina",
    "enrique" => "enrique",
    "marta" => "marta"
);

foreach ($usuarios as $nombre => $clave) {
    $clave_encriptada = password_hash($clave, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$nombre', '$clave_encriptada')";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario $nombre insertado correctamente";
    } else {
        echo "Error al insertar usuario $nombre: " . $conexion->error;
    }
}

$conexion->close();

?>
</body>
</html>
