<?php
// Conexión a la base de datos
include 'conexion.php';

// Obtener el ID del estudiante de la URL
$id = $_GET["id"];

// Eliminar el estudiante de la base de datos
$query = "DELETE FROM estudiante WHERE id='$id'";
mysqli_query($conexion, $query);

mysqli_close($conexion);

// Redireccionar a la página principal
header("Location:./regusuario.php");
?>