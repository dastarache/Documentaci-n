<?php

$conexion = mysqli_connect('localhost', 'root', '', 'db_base28_05');


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
    $documento = $_GET['doc'];
    $nombre = $_GET['nom'];
    $apellido = $_GET['ape'];
    $fecha_nac = $_GET['fecha'];


    $sql= "INSERT INTO tb_usuarios (documento, nombre, apellido, fecha_nac) VALUES ('$documento', '$nombre', '$apellido', '$fecha_nac')";
    $consulta = $conexion ->query($sql);
if($consulta){

}
