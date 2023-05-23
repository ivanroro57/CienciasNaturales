<?php
$host="localhost";
$user="root";
$password="";
$dbname="natuciencias";

$conexion=mysqli_connect($host,$user,$password,$dbname);
if(!$conexion){
    echo "conexion fallida";
}

?>