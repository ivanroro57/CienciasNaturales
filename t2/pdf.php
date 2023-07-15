<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/estilo-t1.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link id="theme-style"rel="stylesheet" href="./prueba-light.css">
    <title>NatuCiencias</title>
</head>

<body>
    <!-- codigo del header y marca -->
    <button id="theme-toggle" onclick="changeTheme()"><span class="icon-light-up"></span></button>
    <script src="tema.js"></script>
  <header>
    <div class="contenedor-header">
      <div class="logo-texto">
        <h1>¡NatuCiencias!</h1>
        <h4><span class=" icon-user"></span> Usuario</h4>
      </div>
      <div class="logo-texto-derecho">
        <a href="../index.php"><span class="icon-log-out"></span></a>
      </div>
    </div>
  </header>
  <div class="navegacion">
    <div class="nav-container">
      <div class="container-a active">
      <a href="../Ginicio.php"><span class="icon-home"></span></a>
      </div>
      <div class="container-a active">
        <a href="explica.php"><span class="icon-video"></span></a>
      </div>
      <div class="container-a active">
        <a href="./actividad1.php"><span class="icon-game-controller"></span></a>
      </div>
      <div class="container-a active">
        <a href="./evalua.php"><span class="icon-check"></span></a>
      </div>
      <div class="container-a active">
        <a href="./pdf.php"><span class="icon-open-book"></span></a>
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

  <!-- codigo pdf -->
  <h1 class="h1">Actividades en Pdf</h1>
  <div class="pdf-view">
<iframe src="./pdf/actividad1.pdf" type="aplication/pdf"></iframe>
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