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
    <h1 class="h1">Relaciona las imagenes con las pistas</h1>
    <table class="tabla1">
        <thead>
            <td class="td1">#</td>
            <td class="td2">Pista</td>
            <td class="td1">#</td>
            <td class="td2">Pista</td>
        </thead>
        <tr>
            <td>1</td>
            <td>Mamífero acuático de unos 2,5 m de longitud, color grisáceo, vive en mares cálidos y
                templados," pueden aprender a realizar tareas complejas, mediante entrenamiento, vocalizar sonidos
                parecidos a palabras"
            </td>

            <td>2</td>
            <td>Reptil cuyo cuerpo está protegido por un duro caparazón , dentro del cual pueden retraer la
                cabeza, las extremidades y la cola; con cuatro patas cortas, cuello que puede alargar y encoger.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mamífero volador, se orienta en la oscuridad al percibir los ecos de los ultrasonidos que él mismo
                emite; es nocturno y pasa el día colgado cabeza abajo.</td>

            <td>4</td>
            <td>Mamífero adaptado a la vida acuática, de 150 a 300 cm de longitud, cubierto de pelo corto, cola apenas
                desarrollada, capas de grasa bajo la piel para protegerse del frío ,habita en mares fríos.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Mamífero felino de cola larga, pelo espeso y suave, largos bigotes y uñas retráctiles; tiene gran
                agilidad, buen olfato, buen oído y excelente visión nocturna.</td>

            <td>6</td>
            <td>Mamífero macho, de tamaño mediano o grande, pelo corto de color generalmente uniforme y orejas cortas;
                se domestica con facilidad y suele usarse para la monta. </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Ave trepadora de 30 a 40 cm de longitud, con el plumaje de colores muy vistosos y variados, y el pico
                fuerte, grueso y curvo; es capaz de imitar la voz humana.</td>

            <td>8</td>
            <td>Mamífero herbívoro,se desplaza a grandes saltos, cola larga y robusta en la que se apoya cuando está
                parado; la hembra tiene una bolsa marsupial en el vientre, donde lleva sus crías.</td>
        </tr>
    </table>
    <?php 
$nombre1=isset($_POST['animal1'])?$_POST['animal1']:'';
$nombre2=isset($_POST['animal2'])?$_POST['animal2']:'';
$nombre3=isset($_POST['animal3'])?$_POST['animal3']:'';
$nombre4=isset($_POST['animal4'])?$_POST['animal4']:'';
$nombre5=isset($_POST['animal5'])?$_POST['animal5']:'';
$nombre6=isset($_POST['animal6'])?$_POST['animal6']:'';
$nombre7=isset($_POST['animal7'])?$_POST['animal7']:'';
$nombre8=isset($_POST['animal8'])?$_POST['animal8']:'';

$puntos=0;$pmal=0;
if(isset($_POST['btok'])){
if( $nombre1 =="3" )
{
	$puntos=$puntos+1;
}
if( $nombre2 =="2" )
{
	$puntos=$puntos+1;
	}
if( $nombre3 =="1" )
{
	$puntos=$puntos+1;
}
if( $nombre4 =="4" )
{
	$puntos=$puntos+1;
}
if( $nombre5 =="6" )
{
	$puntos=$puntos+1;
}
if( $nombre6 =="7" )
{
	$puntos=$puntos+1;
}
if( $nombre7 =="5" )
{
	$puntos=$puntos+1;
}
if( $nombre8 =="8" )
{
	$puntos=$puntos+1;
}


}
// $idest=$_SESSION['idest'];
// require("conexion.php");
// if($conexionbd){
// $fecha= date("Y/m/d");

// $vconsulta ="INSERT INTO tbpuntos VALUES ('','".$idest."','Clasificación de Animales',1,'".$puntos."','".$pmal."','".$fecha."')";
// mysqli_query($conexionbd,$vconsulta);
// mysqli_close($conexionbd);
/*echo $vconsulta;}*/
	
		
?>

    <table class="tabla2">
        <form action="" method="post" name="form1" id="contactform">
            <thead>
                <td class="thead">
                    <input name="btok" type="submit" value="Verificar" />
                </td>
                <td class="thead">
                    <?php
                    if($puntos==8){
                    echo"Obtuviste $puntos de(8) respuestas<a href=actividad2.php>Siguiente</a>";}
                    if($puntos==1){
                    $pmal=7;
                    echo"Llevas 1";}
                    if($puntos==2){
                    $pmal=6;
                    echo"Llevas 2";}
                    if($puntos==3){
                    $pmal=5;
                    echo"Llevas 3";}
                    if($puntos==4){
                    $pmal=4;
                    echo"Llevas 4";}
                    if($puntos==5){
                    $pmal=3;
                    echo"Llevas 5";}
                    if($puntos==6){
                    $pmal=2;
                    echo"Llevas 6";}
                    if($puntos==7){
                    $pmal=1;
                    echo"Llevas 7";}
                    ?>
                </td>
            </thead>
            <tr>
                <td><img src="img/tortuga.png" /></td>
                <td><img src="img/delfin.png" /></td>
                <td><img src="img/murcielago.jpg" /></td>
                <td><img src="img/foca.jpg" /></td>
            </tr>
            <td>
                <select name="animal2">
                    <option>[Seleccionar]</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </td>

            <td>
                <select name="animal3">
                    <option>[Seleccionar]</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </td>

            <td>
                <select name="animal1">
                    <option>[Seleccionar]</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </td>

            <td>
                <select name="animal4">
                    <option>[Seleccionar]</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </td>
            </tr>
            <tr>
                <td><img src="img/caballo.png" /></td>
                <td><img src="img/ave.png" /></td>
                <td><img src="img/gato.png" /></td>
                <td><img src="img/canguro.png" /></td>
            </tr>
            <tr>
                <td>
                    <select name="animal5">
                        <option>[Seleccionar]</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </td>
                <td>
                    <select name="animal6">
                        <option>[Seleccionar]</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </td>

                <td>
                    <select name="animal7">
                        <option>[Seleccionar]</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </td>
                <td>
                    <select name="animal8">
                        <option>[Seleccionar]</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </td>
            </tr>
    </table>
    </form>


    <br />
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