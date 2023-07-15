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
        <h4><span class=" icon-user"></span>
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

  <!-- codigo actividad1 -->
  <h1 class="h1">Completa la Imagen</h1>
  <form action="" method="post">
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
    <option>higado</option>
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
  <input type="submit" value="Verificar" name="btok">
  </form>
  </div>
  <?php
$esófago=isset($_POST['Esófago'])?$_POST['Esófago']:'';
$pico=isset($_POST['pico'])?($_POST['pico']):'';
$estómago=isset($_POST['Estómago'])?($_POST['Estómago']):'';
$buche=isset($_POST['buche'])?($_POST['buche']):'';
$higado=isset($_POST['higado'])?($_POST['higado']):'';
$intestino=isset($_POST['Intestino'])?($_POST['Intestino']):'';
$cloaca=isset($_POST['Cloaca'])?($_POST['Cloaca']):'';
$recto=isset($_POST['Recto'])?($_POST['Recto']):'';
//variables de puntos
$puntos=0;
$pmal=0;
if(isset($_POST['btok'])){//verificar si ha enviado el boton
//Suma de puntos
if($esófago=="Esófago")
$puntos=$puntos+1;
if($pico=="Pico")
$puntos=$puntos+1;
if($estómago=="Estómago")
$puntos=$puntos+1;
if($buche=="Buche")
$puntos=$puntos+1;
if($higado=="higado")
$puntos=$puntos+1;
if($intestino=="Intestino")
$puntos=$puntos+1;
if($cloaca=="Cloaca")
$puntos=$puntos+1;
if($recto=="Recto")
$puntos=$puntos+1;
if($puntos==8){
echo"<pre>Obtuviste $puntos de(8) respuestas<a href=actividad11.php class=a>Siguiente</a></pre>";}
else if($puntos==0){
  echo "Comienza a seleccionar";
}
if($puntos==1){
	$pmal=7;
echo"<pre>Vas BIEN llevas 1</pre>";}
if($puntos==2){
$pmal=6;
echo"<pre>Vas BIEN llevas 2</pre>";}
if($puntos==3){
$pmal=5;
echo"<pre>Vas BIEN llevas 3</pre>";}
if($puntos==4){
$pmal=4;
echo"<pre>Vas BIEN llevas 4</pre>";}
if($puntos==5){
$pmal=3;
echo"<pre>Vas BIEN llevas 5</pre>";}
if($puntos==6){
$pmal=2;
echo"<pre>Vas BIEN llevas 6</pre>";}
if($puntos==7){
	$pmal=1;
echo"<pre>Vas BIEN llevas 7</pre>";}
}

// $idest=$_SESSION['idest'];
// require("conexion.php");
// if($conexionbd){
// $fecha= date("Y/m/d");

// $vconsulta ="INSERT INTO tbpuntos VALUES ('','".$idest."','Nutrición en animales',1,'".$puntos."','".$pmal."','".$fecha."')";
// mysqli_query($conexionbd,$vconsulta);
// mysqli_close($conexionbd);
// /*echo $vconsulta;*/}
	
		
?>
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