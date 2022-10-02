<?php

//Conexion a base de datos
$enlace = mysqli_connect("127.0.0.1", "root", "", "ciflights");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    header('Location: login.php?status=0&msg=Error al guardar registro: ' . mysqli_connect_error());
}

//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

//Insertar registro
$documento = $_POST["doc"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO usuario VALUES ($documento,'$name','$email', '$password')";
mysqli_query($enlace, $query);

mysqli_close($enlace);

header('Location: login.php?status=1&msg=Registro guardado con exito');

?>