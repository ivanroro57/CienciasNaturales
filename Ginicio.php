<?php
  // include 'conexion.php';
  // session_destroy();
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./fonts/style.css">
  <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
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
  <div class="card">
     <div class="container-img-card card1">
      <img src="./images/t2.png" widht="133" height="121" alt="Imagen de tema 1">
     </div>
     <div class="nombre-card">
      <h4 class="titulo">Nutrición en los Animales</h4>
      <p>Tematica #1</p>
    </div>
    <div class="button-card">
      <a href="./t1/explica.php">Ir a Explicacion</a>
    </div>
  </div>
  <div class="card">
    <div class="container-img-card card2">
      <img src="./images/t9.png" widht="133" height="121" alt="Imagen de tema 1">
    </div>
    <div class="nombre-card">
     <h4 class="titulo">Clasificación en Animales</h4>
     <p>Tematica #2</p>
   </div>
   <div class="button-card">
    <a href="./t2/explica.php">Ir a Explicacion</a>
   </div>
 </div>
 <div class="card">
  <div class="container-img-card card3">
    <img src="./images/t1.png" widht="133" height="121" alt="Imagen de tema 1">
  </div>
  <div class="nombre-card">
   <h4 class="titulo">Respiración en los Animales</h4>
   <p>Tematica #3</p>
 </div>
 <div class="button-card">
  <a href="">Ir a Explicacion</a>
 </div>
</div>
<div class="card">
  <div class="container-img-card card4">
    <img src="./images/t4.png" widht="133" height="121" alt="Imagen de tema 1">
  </div>
  <div class="nombre-card">
   <h4 class="titulo">Circulación en el Hombre</h4>
   <p>Tematica #4</p>
 </div>
 <div class="button-card">
  <a href="">Ir a Explicacion</a>
 </div>
</div>
<div class="card">
  <div class="container-img-card card5">
    <img src="./images/t5.png" widht="133" height="121" alt="Imagen de tema 1">
  </div>
  <div class="nombre-card">
   <h4 class="titulo">Nutrición en los Animales</h4>
   <p>Tematica #1</p>
 </div>
 <div class="button-card">
   <a href="">Ir a Explicacion</a>
 </div>
</div>
<div class="card">
 <div class="container-img-card card6">
   <img src="./images/t6.png" widht="133" height="121" alt="Imagen de tema 1">
 </div>
 <div class="nombre-card">
  <h4 class="titulo">Clasificación en Animales</h4>
  <p>Tematica #2</p>
</div>
<div class="button-card">
 <a href="">Ir a Explicacion</a>
</div>
</div>
</div>
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