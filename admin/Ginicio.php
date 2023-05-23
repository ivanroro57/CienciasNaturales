<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../fonts/style.css">
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
		?></h4>
                </div>
                <div class="logo-texto-derecho">
                    <a href="./cerrarsesion.php"><span class="icon-log-out"></span></a>
                </div>
            </div>
        </header>
        <div class="navegacion">
            <div class="nav-container">
              <div class="container-a active">
              <a href="./Ginicio.php"><span class="icon-home"></span></a>
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
  <main class="main-container">
  
  </main>
  <footer>
    <div class="contenido-footer">
    </div>
    <div class="copy">
        <h2>© 2023 NatuCiencias - All Rights Reserved</h2>
    </div>
</footer>
</body>

</html>