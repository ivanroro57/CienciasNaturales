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
  <div class="navegacion">
        <div class="nav-container">
            <div class="container-a active">
                <a href="./actividad1.php">Juego1</a>
            </div>
            <div class="container-a active">
                <a href="./actividad2.php">Juego2</a>
            </div>
            <div class="container-a active">
                <a href="./actividad3.php">Juego3</a>
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

  <!-- codigo actividad2-->
  <h1 class="h1">Completa la Imagen</h1>
  <div class="insecto">
  <span>
  <select name="Esófago">
    <option>[Esófago]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Buche">
    <option>[Buche]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Intestino Medio">
    <option>[Intestino Medio]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Boca">
    <option>[Boca]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Piezas Bucales">
    <option>[Piezas Bucales]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Glándula Salivar">
    <option>[Glándula Salivar]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Colon">
    <option>[Colon]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Recto">
    <option>[Recto]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  <span>
  <select name="Ano">
    <option>[Ano]</option>
    <option>Esófago</option>
    <option>Buche</option>
    <option>Intestino Medio</option>
    <option>Boca</option>
    <option>Piezas Bucale</option>
    <option>Glándula Salivar</option>
    <option>Colon</option>
    <option>Recto</option>
    <option>Ano</option>
    </select>
  </span>
  </div>
  <div class="ver-sig">
  <div class="boton">
    <form action="">
  <input type="submit" value="Verificar">
  </form>
  </div>
  <!-- <div class="boton">
    <form action="./actividad3.php">
    <input type="submit" value="Siguiente">
    </form>
  </div> -->
  </div>
  <br>
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