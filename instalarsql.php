<?php
$host="localhost";
$user="root";
$password="";
$dbname="natuciencias";


$conexion=mysqli_connect($host,$user,$password,$dbname);
$sql = file_get_contents("data/natuciencias.sql");
mysqli_query($conexion,$sql);
if(!$conexion){
    die("Error al conectar".mysql_connect_error());
}
$sqlArchivo="./data/natuciencias.sql";
$sql=file_get_contents($sqlArchivo);
if(mysqli_multi_query($conexion,$sql)){
    echo "Archivo sql importado correctamente<br>";
}
else{
    echo "Error al importar los arhcivos".mysqli_error($conexion);
}
mysqli_close($conexion);
?>