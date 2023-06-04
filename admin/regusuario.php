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
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="" class="reg-form">
            <h1>Registro de Docentes</h1>
            <hr>
            <?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado todos los campos del formulario
    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) &&
        isset($_POST["usuario"]) && isset($_POST["contrasena"])) {

        // Verificar si los campos están vacíos
        if ( empty($_POST["nombre"]) || empty($_POST["apellido"]) ||
            empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
            echo "Por favor, complete todos los campos.";
        } else {
            // Obtener los datos del formulario
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $usuario = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            // Verificar si el usuario ya está registrado
            $query = "SELECT * FROM docente WHERE usuario = '$usuario'";
            $result = $conexion->query($query);

            if ($result->num_rows > 0) {
                echo "El usuario ya está registrado.";
            } else {
                // El usuario no está registrado, realizar el proceso de inserción de datos
                $insertQuery = "INSERT INTO docente (id, nombre, apellido, usuario, contrasena) 
                                VALUES ('', '$nombre', '$apellido', '$usuario', '$contrasena')";

                if ($conexion->query($insertQuery) === TRUE) {
                    echo "Perfecto el docente ya puede iniciar sesion!";
                } else {
                    echo "Error al registrar los datos: " . $conexion->error;
                }
            }

            // Cerrar la conexión a la base de datos
            $conexion->close();
        }
    } else {
        echo "Por favor, envíe todos los campos del formulario.";
    }
}
?>
            <hr>
            <label for="nombre">Nombres:</label><br>
            <input name="nombre" type="text" id="nombre" placeholder="Escribe los nombres" /><br>

            <label for="apellido">Apellidos:</label><br>
            <input name="apellido" type="text" id="apellido" placeholder="Escribe los apellidos" /><br>

            <label for="usuario">Ingresa el Usuario</label><br>
            <input name="usuario" type="text" id="usuario" placeholder="Nombre de usuario" /><br>

            <label for="contrasena">Ingresa la contraseña</label><br>
            <input name="contrasena" type="password" id="contrasena" placeholder="Contraseña" /><br>


            <input type="submit" name="registrar" value="Registrar Docente" class="reg-button" />

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