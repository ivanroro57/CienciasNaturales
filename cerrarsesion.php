<?php
session_start();
$tiempoEspera=30;
session_get_cookie_params($tiempoEspera);
session_unset();
session_destroy();
header("location: ./index.php");

?>