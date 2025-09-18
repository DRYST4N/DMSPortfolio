<?php
$host = "localhost";
$usuario = "u382626173_diegoms";
$password = "BaseDatosDMS1966";
$bd = "u382626173_dms";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>