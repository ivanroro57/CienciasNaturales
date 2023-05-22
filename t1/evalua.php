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

  <!-- codigo evalua -->
<h1 class="h1">Evaluacion Nutricion en Animales</h1>
<?php
@$tex1=$_POST['tex1'];
@$tex2=$_POST['tex2'];
@$tex3=$_POST['tex3'];
@$tex4=$_POST['tex4'];
@$tex5=$_POST['tex5'];
@$tex6=$_POST['tex6'];
@$tex7=$_POST['tex7'];
@$tex8=$_POST['tex8'];
@$tex9=$_POST['tex9'];
@$tex10=$_POST['tex10'];
$puntos=0;$pmal=0;
if(isset($_POST['btok'])){
{if($tex1=="Digestión")
$puntos=$puntos+1;}
{if($tex2=="Herbívoros")
$puntos=$puntos+1;}
{if($tex3=="Nutrición")
$puntos=$puntos+1;}
{if($tex4=="Alimentación")
$puntos=$puntos+1;}
{if($tex5=="Omnívoros")
$puntos=$puntos+1;}
{if($tex6=="Necrofagos")
$puntos=$puntos+1;}
{if($tex7=="Absorción")
$puntos=$puntos+1;}
{if($tex8=="Depredadores")
$puntos=$puntos+1;}
{if($tex9=="Metabolismo celular")
$puntos=$puntos+1;}
{if($tex10=="Alimentación y nutrición")
$puntos=$puntos+1;}
if($puntos==10)
echo"<pre>Obtuviste $puntos de(10) respuestas<a href=actividad11.php class=a>Siguiente</a></pre>";
if($puntos==1){
	$pmal=9;
echo"<pre>Estas mal sigue intendo llevas 1</pre>";}
if($puntos==2){
$pmal=8;
echo"<pre>Estas mal sigue intendo llevas 2</pre>";}
if($puntos==3){
$pmal=7;
echo"<pre>Estas mal sigue intendo llevas 3</pre>";}
if($puntos==4){
$pmal=6;
echo"<pre>Estas mal sigue intendo llevas 4</pre>";}
if($puntos==5){
$pmal=5;
echo"<pre>Estas mal sigue intendo llevas 5</pre>";}
if($puntos==6){
$pmal=4;
echo"<pre>Estas mal sigue intendo llevas 6</pre>";}
if($puntos==7){
	$pmal=3;
echo"<pre>Estas mal sigue intendo llevas 7</pre>";}
if($puntos==8){
	$pmal=2;
echo"<pre>Estas mal sigue intendo llevas 8</pre>";}
if($puntos==9){
	$pmal=1;
echo"<pre>Estas mal sigue intendo llevas 9</pre>";}
$idest=$_SESSION['idest'];
require("conexion.php");
if($conexionbd){
$fecha= date("Y/m/d");

$vconsulta ="INSERT INTO tbpuntos VALUES ('','".$idest."','Nutrición en animales','evalua','".$puntos."','".$pmal."','".$fecha."')";
mysqli_query($conexionbd,$vconsulta);
mysqli_close($conexionbd);
/*echo $vconsulta;*/}}
	
		
?>
<div class="columna">
    <form action="" method="post">
      <h1>1.Transformación de alimento en particulas más sencillas</h1>
        <label>
          <input name="tx1" type="radio"/>Digestión
        </label>
        <label>
    <input name="tx1" type="radio"  />Absorción
  </label>
  <label>
    <input name="tx1" type="radio" />Excresión
  </label>
  <label>
    <input name="tx1" type="radio" />Nutrición
  </label>
  <h1>2.Se alimentan generalmente de plantas</h1>
<label>
  <input name="tx2" type="radio" />Herbívoros
</label>
<label>
  <input name="tx2" type="radio"  />Depredadores
</label>
<label>
  <input name="tx2" type="radio" />Carnivoros
</label>
<label>
  <input name="tx2" type="radio"  />Necrófagos
</label>
<h1>3.Proceso de obtención de Nutrientes</h1>
<label>
  <input name="tx3" type="radio" value="" />Nutrición
</label>
<label>
  <input name="tx3" type="radio" value="" />Alimentación
</label>
<label>
  <input name="tx3" type="radio" value="" />Excresión
</label>
<label>
  <input name="tx3" type="radio" value="" />Expulsión
</label>
<h1>4. Ingesta de alimentos solidos o liquidos </h1>
<label>
  <input name="tx4" type="radio" value="" />Alimentación
</label>
<label>
  <input name="tx4" type="radio" value="" />Nutrición
</label>
<label>
  <input name="tx4" type="radio" value="" />Ingestión
</label>
<label>
  <input name="tx4" type="radio" value="" />Expulsión
</label>
<h1>5.Toman alimento tanto de origen animal como vegetal </h1>
<label>
  <input name="tx5" type="radio" value="" />Herbívoros
</label>
<label>
  <input name="tx5" type="radio" value="" />Omnívoros
</label>
<label>
  <input name="tx5" type="radio" value="" />Depredadores
</label>
<label>
  <input name="tx5" type="radio" value="" />Carnivoros
</label>
<h1>6. Se alimenta de cadaveres </h1>
<label>
  <input name="tx6" type="radio" value="" />Necrofagos
</label>
<label>
  <input name="tx6" type="radio" value="" />Omnívoros
</label>
<label>
  <input name="tx6" type="radio" value="" />Carnivoros
</label>
<label>
  <input name="tx6" type="radio" value="" />Depredadores
</label>
<h1>7.Particulas que llegan a la célula </h1>
<label>
  <input name="tx7" type="radio" value="" />Absorción
</label>
<label>
  <input name="tx7" type="radio" value="" />Alimentación
</label>
<label>
  <input name="tx7" type="radio" value="" />Nutrición
</label>
<label>
  <input name="tx7" type="radio" value="" />Íngestión
</label>
<h1>8.Para capturar a sus presas han desarrollado adaptaciones como agresividad.</h1>
<label>
  <input name="tx8" type="radio" value="" />Depredadores
</label>
<label><input name="tx8" type="radio" value="" />Carnivoros
</label>
<label>
  <input name="tx8" type="radio" value="" />Omnívoros
</label>
<label>
  <input name="tx8" type="radio" value="" />Herbívoros
</label>
<h1>9. Obtención de energía para fabricar moleculas complejas</h1>
<label>
  <input name="tx9" type="radio" value="" />Metabolismo celular
</label>
<label>
  <input name="tx9" type="radio" value="" />Metabolismo
</label>
<label>
  <input name="tx9" type="radio" value="" />Elaboración
</label>
<label>
  <input name="tx9" type="radio" value="" />Celular
</label>
<h1>10.Son procesos relacionados pero no equivalentes</h1>
<label>
  <input name="tx10" type="radio" value="" />Alimentación y nutrición
</label>
<label>
  <input name="tx10" type="radio" />alimentación
</label>
<label>
  <input name="tx10" type="radio" />nutrición
</label>
<label><input name="tx10" type="radio" />ingestión
</label>
<br>
<input type="submit" value="Verificar" class="btn-evalua">
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