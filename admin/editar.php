<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de edición
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Actualizar los datos del estudiante en la base de datos
    $query = "UPDATE docente SET nombre='$nombre',apellido='$apellido', usuario='$usuario',contrasena='$contrasena' WHERE id='$id'";
    mysqli_query($conexion, $query);

    // Redireccionar a la página 
    header("Location: modusuario.php");
}

// Obtener el ID del estudiante de la URL
$id = $_GET["id"];

// Obtener los datos del estudiante de la base de datos
$query = "SELECT * FROM docente WHERE id='$id'";
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="./css/estilo-docente.css">
    <title>NatuCiencias</title>
</head>

<body>
    <header>
        <div class="contenedor-header">
            <div class="logo-texto">
                <h1>¡NatuCiencias!</h1>
                <h4><span class="icon-user"></span>
                    <?php 
		session_start();
		if (isset($_SESSION["usuario"])){
        echo ucfirst($_SESSION["usuario"]);
			// echo strtoupper($_SESSION["usuario"]);
		}
		else 
		header("location:index.php");
		?>
                </h4>
            </div>
            <div class="logo-texto-derecho">
                <a href="./cerrarsesion.php"><span class="icon-log-out"></span></a>
            </div>
        </div>
    </header>
    <div class="navegacion">
        <div class="nav-container">
            <div class="container-a active">
                <a href="./regusuario.php"><span class="icon-add-user"></span></a>
            </div>
            <div class="container-a active">
                <a href="./modusuario.php"><span class="icon-edit"></span></a>
            </div>
        </div>
    </div>
    <div class="texto-grande">
        <div class="contenedor-texto">
            <h2 class="big-text">
                <span>
                    Divierte,aprende y juega
                </span>
                <br>
                Innovando en
                Ciencias
                <br>
                Naturales.
            </h2>
        </div>
    </div>
    <div class="marca">
        <p class="marca-contenedor">Realizado por |
            <span> Ivan Andres Rodriguez</span>
            | Servicio Nacional de Aprendizaje
        </p>
    </div>
    <!-- codigo de registro estudiantes -->
    <div class="reg-container">

        <form method="POST" action="" class="reg-form">
            <h1>Editar Docente</h1>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>">

            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>">

            <label for="usuario">Contrasena:</label>
            <input type="text" name="contrasena" value="<?php echo $row['contrasena']; ?>">

            <!-- <input type="text" name="grado" value="<?php echo $row['grado']; ?>"><br><br> -->
            <input type="submit" value="Guardar cambios" class="reg-button">
        </form>
    </div>
    <!-- codigo del footer -->
    <footer>
        <div class="contenido-footer">
        </div>
        <div class="copy">
            <h2>© 2023 NatuCiencias - All Rights Reserved</h2>
        </div>
    </footer>
</body>

</html>