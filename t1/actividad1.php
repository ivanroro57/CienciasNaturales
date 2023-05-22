<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/estilo-t1.css">
  <link rel="stylesheet" href="../fonts/style.css">
  <title>NatuCiencias</title>
</head>

<body>
  <!-- codigo del header y marca -->
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

  <!-- codigo actividad1 -->
  <h1 class="h1">Completa la Imagen</h1>
  <div class="ave">
  <span>
    <select name="pico">
    <option>[pico]</option>
    <option>Cloaca</option>
    <option>Boca</option>
    <option>Buche</option>
    <option>Hígado</option>
    <option>Pico</option>
    </select>
    </span>
  <span>
      <select name="Esófago">
        <option>[Esofago]</option>
        <option>Cloaca</option>
        <option>Laringe</option>
        <option>Esófago</option>
        <option>Buche</option>
        <option>Hígado</option>
        <option>Pico</option>
      </select>
    </span>
    <span>
    <select name="buche">
      <option>[Buche]</option>
    <option>Estómago</option>
    <option>Buche</option>
    <option>Hígado</option>
    <option>Pico</option></select>
    </span>
    <span>
    <select name="Estómago">
      <option>[Estomago]</option>
    <option>Intestino</option>
    <option>Estómago</option>
    <option>Hígado</option>
    <option>Pico</option>
    </select>
    </span>
    <span>
    <select name="Intestino">
      <option>[Intestino]</option>
    <option>Cloaca</option>
    <option>Intestino</option>
    <option>Buche</option>
    <option>Hígado</option>
    <option>Pico</option></select>
    </span>
    <span>
    <select name="higado">
      <option>[Higado]</option>
    <option>Riñon</option>
    <option>Buche</option>
    <option>Hígado</option>
    <option>Pico</option></select>
    </span>
    <span>
    <select name="Recto">
      <option>[Recto]</option>
    <option>Intestino</option>
    <option>Buche</option>
    <option>Recto</option>
    <option>Pico</option>
    <option>Cloaca</option>
  </select>
    </span>
    <span>
    <select name="Cloaca">
      <option>[Cloaca]</option>
    <option>Intestino</option>
    <option>Buche</option>
    <option>Hígado</option>
    <option>Cloaca</option></select>
    </span>
  </div>
  <div class="ver-sig">
  <div class="boton">
    <form action="">
  <input type="submit" value="Verificar">
  </form>
  </div>
  <div class="boton">
    <form action="./actividad2.php">
    <input type="submit" value="Siguiente">
    </form>
  </div>
  </div>
</br>
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