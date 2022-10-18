<?php

//Conexion a base de datos
$enlace = mysqli_connect("127.0.0.1", "root", "", "ciflights");

//Mensaje de Error
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    header('Location: login.php?status=0&msg=Error al guardar registro: ' . mysqli_connect_error());
}

//Guardar valor en cada variable
$documento = $_POST["doc"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

//Query Insertar valores
$query = "INSERT INTO usuario VALUES ($documento,'$name','$email', '$password')";

//Consulta conexión y Insertar valores
mysqli_query($enlace, $query);

// cerrar consulta mysql
mysqli_close($enlace);

//Redirigir al principio de la página
header('Location: login.php?status=1&msg=Registro guardado con exito');

?>