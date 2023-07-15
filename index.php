<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="Viewport-Width, Width" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fonts/style.css">
    <title>NatuCiencias - Inicio de Sesion</title>
</head>


    <body>
        <header>
            <div class="contenedor-header">
                <div class="logo-texto">
                    <h1>¡NatuCiencias!</h1>
                </div>
                <div class="logo-texto-derecho">
                    <a href="./admin/index.php">| Administrador |</a>
                    <a href="./docente/index.php">| Docente |</a>
                    <a href="index.php"><span class="icon-help-with-circle"></span></a>
                </div>
            </div>
        </header>
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
        <main>
            <form action="./iniciarsesion.php" method="post" class="formulario">
                <h2>¡NatuCiencias!</h2>
                <h3>Acceder</h3>
                <div class="mensaje">
                <?php
                if(isset($_GET['error'])){
                    echo $_GET['error'];
                }
                ?>
                </div>
                <label for="nombre">
                    <input type="text" id="nombre" name="usuario" placeholder=" Usuario"/>
                </label>
                <label for="contra">
                    <input type="password" id="contra" name="contrasena" placeholder=" Contraseña"/>
                </label>
                <span>¿Olvidaste tu contraseña?</span>
                <input type="submit" name="inicio" value="Iniciar Sesión" class="button" />
            </form>
        </main>
    </body>

</html>