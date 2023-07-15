<?php
include './conexion.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/estilo-docente.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <title>NatuCiencias - Docente</title>

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
		header("location:./index.php");
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
                <a href=""><span class="icon-edit"></span></a>
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
    <div class="general-container">
    <h1>Lista de Estudiantes</h1>
    <div class="reg-container">
        <br>
        <table class="table">
            <thead class="thead">
                <!-- <th>ID</th> -->
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Contrasena</th>
                <th>Grado</th>
                <th>Accion</th>
            </thead>
            <?php
    // Consulta para obtener los estudiantes
    $query = "SELECT * FROM estudiante";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        //echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['apellido']."</td>";
        echo "<td>".$row['usuario']."</td>";
        echo "<td>".$row['contrasena']."</td>";
        echo "<td>".$row['grado']."</td>";
        echo "<td>";
        echo "<a href='editar.php?id=".$row['id']."'>Editar</a><br>";
        echo "<a href='eliminar.php?id=".$row['id']."'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
    mysqli_close($conexion);
    ?>
        </table>
    </div>
    </div>
    <br>
    <!-- codigo del footer -->
    <!-- <footer>
        <div class="contenido-footer">
        </div>
        <div class="copy">
            <h2>© 2023 NatuCiencias - All Rights Reserved</h2>
        </div>
    </footer> -->
</body>

</html>