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

    <!-- codigo evalua -->
    <h1 class="h1">Evaluacion Clasificacion de Animales</h1>
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
            <h1>1.¿Los animales vertebrados tienen una columna ósea interna?</h1>
            <form name="form1">
                <label>
                    <input name="tx1" type="radio" value="" />Verdadero
                </label>
                <label>
                    <input name="tx1" type="radio" value="" />Falso
                </label>
            </form>
            <h1>2.¿Los animales invertebrados son los que no tienen una columna ósea interna?</h1>
            <form action="" name="form1">
                <label>
                    <input name="tx1" type="radio" value="" />Verdadero
                </label>
                <label>
                    <input name="tx1" type="radio" value="" />Falso
                </label>
            </form>
            <h1>3.¿Los animales viviparos son los que se forman en el interior de un huevo?</h1>
            <form action="" name="form1">
                <label>
                    <input name="tx1" type="radio" value="" />Verdadero
                </label>
                <label>
                    <input name="tx1" type="radio" value="" />Falso
                </label>
            </form>
            <h1>4.¿Los animales oviparos son los que se desarrollan en el útero o matríz? </h1>
            <form action="" name="form1">
                <label>
                    <input name="tx1" type="radio" value="" />Verdadero
                </label>
                <label>
                    <input name="tx1" type="radio" value="" />Falso
                </label>
            </form>
            <h1>5.¿Unos animales vertebrados podrian ser aves?</h1>
            <form action="" name="form1">
                <label>
                    <input name="tx1" type="radio" value="" />Verdadero</label>
                <label>
                    <input name="tx1" type="radio" value="" />Falso
                </label>
            </form>
            <h1>6.¿Los oviparos se forman en el interior de un huevo ?</h1>
            <form name="form1">
                <label><input name="tx1" type="radio" value="" />Verdadero</label>
                <label><input name="tx1" type="radio" value="" />Falso</label>
            </form>
            <h1>7.¿Hervivoros son animales que se alimentan principalmente de plantas? </h1>
            <form name="form1">
                <label><input name="tx1" type="radio" value="" />Verdadero</label>
                <label><input name="tx1" type="radio" value="" />Falso</label>

            </form>
            <h1>8.¿Un animal que optiene sus energías y sus requerimientos nutricionales se llaman omnívoros?</h1>
            <form name="form1">
                <label><input name="tx1" type="radio" value="" />Verdadero</label>
                <label><input name="tx1" type="radio" value="" />Falso</label>

            </form>
            <h1>9.¿Omnivoros es el nombre que se le da a los animales que se nutren de toda clase de alimentos?</h1>
            <form name="form1">
                <label><input name="tx1" type="radio" value="" />Verdadero</label>
                <label><input name="tx1" type="radio" value="" />Falso</label>

            </form>
            <h1>10.¿Todas aquellas especies que pueden vivir, desarrollandose encima de la superficie se llaman terrestres?
            </h1>
            <form name="form1">
                <label><input name="tx1" type="radio" value="" />Verdadero</label>
                <label><input name="tx1" type="radio" value="" />Falso</label>

            </form>
            <br>
            <input type="submit" value="Verificar" class="btn-evalua" name="btok">
        </form>
        <?php
        @$verdadero1=$_POST['form1'];
@$falso1=$_POST['form1'];
@$verdadero2=$_POST['form2'];
@$falso2=$_POST['form2'];
if(isset($_POST['btok'])){

if ($verdadero1=="verdadero")
if ($falso2=="falso") 
{echo"Las respuestas son correctas";
echo"<a href=actividad.php> Siguiente</a>";} 
else{echo"La respuestas son incorrectas";}}

?>

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