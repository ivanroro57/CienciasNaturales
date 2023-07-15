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

    <!-- codigo actividad3 -->
    <h1 class="h1">
        Crucigrama 
    </h1> 
    <h1 class="h1">
    (Recuerda las letras van en MAYUSCULA)
    </h1>
    <table class="tabla1">
        <thead>
            <td class="acti3-td1">
                VERTICALES
            </td>
            <td class="acti3-td2">
                HORIZONTALES
            </td>
        </thead>
        <tr>
            <td class="pista1ver">1.Animal vertebrado, de sangre caliente, que camina, salta o se mantiene sólo sobre
                las extremidades posteriores, mientras que las extremidades anteriores están modificadas como alas.
            </td>
            <td class="pista1hor">1.Ave corredora de hasta 2,5 m de altura, de cuello desnudo muy largo y
                patas largas y robustas, con solo dos dedos; corre a gran velocidad, aunque no puede volar.</td>
        </tr>
        <tr>
            <td class="pista2ver">2.Mamífero muy corpulento, de piel desnuda muy gruesa; tiene
                patas cortas y robustas con tres dedos, cabeza alargada, cola corta y uno o dos grandes cuernos curvados
                en la línea media de la nariz.</td>
            <td class="pista2hor">2.Mamífero de gran tamaño, el mayor de los terrestres, con la piel de
                color gris oscuro, gruesa, rugosa y sin pelo, grandes orejas colgantes, larga trompa prensil, cola
                larga, y dos colmillos muy largos de punta cónica.</td>
        </tr>
        <tr>
            <td class="pista3ver">3.Se alimentan principalmente de plantas y sus derivados.</td>
            <td class="pista3hor">3.Grupo de vertebrados, con respiración branquial.Se distinguen por
                sufrir una transformación durante su desarrollo denominado metamorfosis.</td>
        </tr>
        <tr>
            <td class="pista4ver">4.Mamífero del orden de los carnívoros, pelaje largo y
                abundante, cola pequeña, y patas cortas con cinco dedos y fuertes garras; su andar es lento y pesado;
                hay varias especies.
                "pardo, polar"</td>
            <td class="pista4hor">4.Animales que no tienen columna vertebral, aunque dispongan de un
                esqueleto interno más o menos rígido. </td>
        </tr>
    </table>
    <br>
    <br>
    <?php
@$ave1=$_POST['ave1'];
@$ave2=$_POST['ave2'];
@$ave3=$_POST['ave3'];
@$le1=$_POST['le1'];
@$le2=$_POST['le2'];
@$le3=$_POST['le3'];
@$le4=$_POST['le4'];
@$le5=$_POST['le5'];
@$le6=$_POST['le6'];
@$le7=$_POST['le7'];
@$ri1=$_POST['ri1'];
@$ri2=$_POST['ri2'];
@$ri3=$_POST['ri3'];
@$ri4=$_POST['ri4'];
@$ri5=$_POST['ri5'];
@$ri6=$_POST['ri6'];
@$ri7=$_POST['ri7'];
@$ri8=$_POST['ri8'];
@$ri9=$_POST['ri9'];
@$ri10=$_POST['ri10'];
@$anfi1=$_POST['anfi1'];
@$anfi2=$_POST['anfi2'];
@$anfi3=$_POST['anfi3'];
@$anfi4=$_POST['anfi4'];
@$anfi5=$_POST['anfi5'];
@$anfi6=$_POST['anfi6'];
@$anfi7=$_POST['anfi7'];
@$elef1=$_POST['elef1'];
@$elef2=$_POST['elef2'];
@$elef3=$_POST['elef3'];
@$elef4=$_POST['elef4'];
@$elef5=$_POST['elef5'];
@$elef6=$_POST['elef6'];
@$elef7=$_POST['elef7'];
@$herv1=$_POST['herv1'];
@$herv2=$_POST['herv2'];
@$herv3=$_POST['herv3'];
@$herv4=$_POST['herv4'];
@$herv5=$_POST['herv5'];
@$herv6=$_POST['herv6'];
@$herv7=$_POST['herv7'];
@$herv8=$_POST['herv8'];
@$herv9=$_POST['herv9'];
@$inver1=$_POST['inver1'];
@$inver2=$_POST['inver2'];
@$inver3=$_POST['inver3'];
@$inver4=$_POST['inver4'];
@$inver5=$_POST['inver5'];
@$inver6=$_POST['inver6'];
@$inver7=$_POST['inver7'];
@$inver8=$_POST['inver8'];
@$inver9=$_POST['inver9'];
@$inver10=$_POST['inver10'];
@$inver11=$_POST['inver11'];
@$inver12=$_POST['inver12'];
@$oso1=$_POST['oso1'];
@$oso2=$_POST['oso2'];
@$oso3=$_POST['oso3'];
$puntos=0;$pmal=0;
if(isset($_POST['btok'])){
if($ave1=="A" and $ave2=="V" and $ave3=="E")
{$puntos=$puntos+1;}
if($ave1=="A" and $le1=="V" and $le2=="E" and $le3=="S" and $le4=="T" and $le5=="R" and $le6=="U" and $le7=="Z")
{$puntos=$puntos+1;}
if($le5=="R" and $ri1=="I" and $ri2=="N" and $ri3=="O" and $ri4=="C" and $ri5=="E" and $ri6=="R" and $ri7=="O" and $ri8=="N" and $ri9=="T" and $ri10=="E")
{$puntos=$puntos+1;}
if($ri10=="E" and $elef1=="L" and $elef2=="E" and $elef3=="F" and $elef4=="A" and $elef5=="N" and $elef6=="T" and $elef7=="E")
{$puntos=$puntos+1;}

if($anfi1=="A" and $ri2=="N" and $anfi2=="F" and $anfi3=="I" and $anfi4=="B" and $anfi5=="I" and $anfi6=="O" and $anfi7=="S")
{$puntos=$puntos+1;}
if($herv1=="H" and $elef7=="E" and $herv2=="R" and $herv3=="B" and $herv4=="I" and $herv5=="V" and $herv6=="O" and $herv7=="R" and $herv8=="O" and $herv9=="S" )
{$puntos=$puntos+1;}
if($inver1=="I" and $inver2=="N" and $inver3=="V" and $ri5=="E" and $inver4=="R" and $inver5=="T" and $inver6=="E" and $inver7=="B" and $inver8=="R" and $inver9=="A" and $inver10=="D" and $inver11=="O" and $inver12=="S")
{$puntos=$puntos+1;}
if($oso1=="O" and $inver12=="S" and $oso2=="O" and $oso3=="S")
{$puntos=$puntos+1;}
// if($puntos==8){
// echo"<pre>Obtuviste $puntos de(8) respuestas<a href=evalua.php class=a>Siguiente</a></pre>";}
// if($puntos==1){
// 	$pmal=7;
// echo"<pre>Estas mal sigue intendo llevas 1</pre>";}
// if($puntos==2){
// $pmal=6;
// echo"<pre>Estas mal sigue intendo llevas 2</pre>";}
// if($puntos==3){
// $pmal=5;
// echo"<pre>Estas mal sigue intendo llevas 3</pre>";}
// if($puntos==4){
// $pmal=4;
// echo"<pre>Estas mal sigue intendo llevas 4</pre>";}
// if($puntos==5){
// $pmal=3;
// echo"<pre>Estas mal sigue intendo llevas 5</pre>";}
// if($puntos==6){
// $pmal=2;
// echo"<pre>Estas mal sigue intendo llevas 6</pre>";}
// if($puntos==7){
// 	$pmal=1;
// echo"<pre>Estas mal sigue intendo llevas 7</pre>";}

}
// $idest=$_SESSION['idest'];
// require("conexion.php");
// if($conexionbd){
// $fecha= date("Y/m/d");

// $vconsulta ="INSERT INTO tbpuntos VALUES ('','".$idest."','Clasificación de Animales',4,'".$puntos."','".$pmal."','".$fecha."')";
// mysqli_query($conexionbd,$vconsulta);
// mysqli_close($conexionbd);
/*echo $vconsulta;*///}
	
		
?>
    <form name="forml1" method="post" action="" id="contactform">
        <center>
            <table class="tabla3">
            <thead>
                <td class="thead">
                    <input name="btok" type="submit" value="Verificar" class="button"/>
                </td>
                <td class="thead">
                  <?php
                    if($puntos==8){
                      echo"<pre>Obtuviste $puntos de(8) respuestas<a href=evalua.php class=a>Siguiente</a></pre>";}
                      if($puntos==1){
                        $pmal=7;
                      echo"<pre>llevas 1</pre>";}
                      if($puntos==2){
                      $pmal=6;
                      echo"<pre>llevas 2</pre>";}
                      if($puntos==3){
                      $pmal=5;
                      echo"<pre>llevas 3</pre>";}
                      if($puntos==4){
                      $pmal=4;
                      echo"<pre>llevas 4</pre>";}
                      if($puntos==5){
                      $pmal=3;
                      echo"<pre>llevas 5</pre>";}
                      if($puntos==6){
                      $pmal=2;
                      echo"<pre>llevas 6</pre>";}
                      if($puntos==7){
                        $pmal=1;
                      echo"<pre>llevas 7</pre>";}
                      
                  ?>
                </td>
            </thead>
                <tr>


                    <td width="65">&nbsp;</td>
                    <td width="47">
                        <center>1.</center>
                    </td>
                    <td width="56">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="56">&nbsp;</td>
                    <td width="56">&nbsp;</td>
                    <td width="56">
                        <center>2.</center>
                    </td>
                    <td width="45">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="56">&nbsp;</td>
                    <td width="45">&nbsp;</td>
                    <td width="60">&nbsp;</td>

                </tr>
                <tr>
                    <td>
                        <center>1.</center>
                    </td>

                    <td width="47" class="td">
                        <center><input name="ave1" type="text" size="1" maxlength="1" /></center>
                    </td>

                    <td class="td">
                        <center><input name="le1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="le7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                </tr>
                <tr>


                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ave2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ri1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ave3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td class="td">
                        <center><input name="anfi1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="ri2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="anfi7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ri3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <center>4.</center>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ri4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="oso1" type="text" size="1" maxlength="1" /></center>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td class="td">
                        <center><input name="inver1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="ri5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver8" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver9" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver10" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver11" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="inver12" type="text" size="1" maxlength="1" /></center>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td class="td">
                        <center><input name="ri6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="oso2" type="text" size="1" maxlength="1" /></center>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ri7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="oso3" type="text" size="1" maxlength="1" /></center>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td class="td">
                        <center><input name="ri8" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <center>3.</center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="ri9" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <center>2.</center>
                    </td>
                    <td class="td">
                        <center><input name="ri10" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef1" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td class="td">
                        <center><input name="elef7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv2" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv3" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv4" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv5" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv6" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv7" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv8" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="td">
                        <center><input name="herv9" type="text" size="1" maxlength="1" /></center>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>


            </table>
        </center>
    </form>
    
    </div>
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