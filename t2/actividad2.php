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
  <h1 class="h1">Selecciona los animales que son vivíparos. </h1>
<form action="" method="post" name="forml" id="contactform">
<table class="tabla2">
<thead>
                <td class="thead">
                    <input name="btok" type="submit" value="Verificar" />
                </td>
</thead>
<tr>
<td width="145"> <label ><img src="img/foca.jpg" width="120" height="100" />
  <input name="foca" type="checkbox" value="foca"/>
  </label></td>
<td width="149"> <label ><img src="img/lombriz.png" width="75" height="97" />
<input name="lombriz" type="checkbox"  value="lombriz"/></label></td>
<td width="161"> <label><img src="img/murcielago.jpg" width="120" height="100" /><input name="murcielago"type="checkbox"  value="murcielago" /></label></td>
<td width="141"> <label><img src="img/mono.png" width="100" height="100" /><input name="mono" type="checkbox" value="mono" /></label></td>
</tr>
<tr>
<td><label> <img src="img/jirafa.png" /><input  name="jirafa" type="checkbox"   value="jirafa"/></label></td>
<td> <label><img src="img/araña1.gif" /><input name="araña" type="checkbox"  value="araña"/></label></td>

<td> <label><img src="img/delfin.png"/><input name="delfin" type="checkbox" value="delfin" /></label></td>
<td> <label><img src="img/pez.png"/><input name="pez" type="checkbox" value="pez" /></label></td>
</tr>
</table>
</form>

  <?php
@$foca=$_POST['foca'];
@$murcielago=$_POST['murcielago'];
@$mono=$_POST['mono'];
@$jirafa=$_POST['jirafa'];
@$delfin=$_POST['delfin'];
$puntos=0;$pmal=0;
if(isset($_POST['btok'])){
if ($foca=="foca")
{$puntos=$puntos+1;} 
if ($murcielago=="murcielago")
{$puntos=$puntos+1;}
if ($mono=="mono")
{$puntos=$puntos+1;}
if ($jirafa=="jirafa")
{$puntos=$puntos+1;}
if ($delfin=="delfin")
{$puntos=$puntos+1;}
if($puntos==5){
echo"<pre>Obtuviste $puntos de(5) respuestas<a href=actividad31.php class=a>Siguiente</a></pre>";}
if($puntos==1){
	$pmal=4;
echo"<pre>Estas mal sigue intendo llevas 1</pre>";}
if($puntos==2){
$pmal=3;
echo"<pre>Estas mal sigue intendo llevas 2</pre>";}
if($puntos==3){
$pmal=2;
echo"<pre>Estas mal sigue intendo llevas 3</pre>";}
if($puntos==4){
$pmal=1;
echo"<pre>Estas mal sigue intendo llevas 4</pre>";}
$idest=$_SESSION['idest'];
require("conexion.php");
if($conexionbd){
$fecha= date("Y/m/d");
$vconsulta ="INSERT INTO tbpuntos VALUES ('','".$idest."','Clasificación de Animales',3,'".$puntos."','".$pmal."','".$fecha."')";
mysqli_query($conexionbd,$vconsulta);
mysqli_close($conexionbd);
/*echo $vconsulta;*/}}
	
		
?>
</div>
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