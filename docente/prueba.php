<?php
include '/.conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están vacíos
    if (empty($_POST["id"]) || empty($_POST["nombre"]) || empty($_POST["apellido"]) ||
        empty($_POST["usuario"]) || empty($_POST["contrasena"]) || empty($_POST["grado"])) {
        echo "Por favor, complete todos los campos.";
    } else {
        // Obtener los datos del formulario
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $grado = $_POST["grado"];

        // Verificar si el usuario existe en la base de datos
        $query = "SELECT * FROM estudiante WHERE id = '$id'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // El usuario existe, realizar la modificación de los datos
            $updateQuery = "UPDATE estudiante SET nombre = '$nombre', apellido = '$apellido', 
            usuario = '$usuario', contrasena = '$contrasena', grado = '$grado' WHERE id = '$id'";

            if ($conexion->query($updateQuery) === TRUE) {
                echo "Modificación exitosa!";
            } else {
                echo "Error al modificar los datos: " . $conexion->error;
            }
        } else {
            echo "El usuario no existe en la base de datos.";
        }
        // Cerrar la conexión
        $conexion->close();
    }
}

?>