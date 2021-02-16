<?php
    require 'conexion.php';

$regitro_codigo_aula = $_POST['regitro_codigo_aula'];
$regitro_descripcion_aula = $_POST['regitro_descripcion_aula'];
$regitro_aula = $_POST['regitro_aula'];
$regitro_foro_aula = $_POST['regitro_foro_aula'];
$estado_aula = $_POST['estado_aula'];

$sql = "INSERT INTO aula (CODIGO, DESCRIPCION, NOMBRE, AFORO, ESTADO) VALUES('$regitro_codigo_aula', '$regitro_descripcion_aula', '$regitro_aula', '$regitro_foro_aula', '$estado_aula')";

    $resultado = $mysqli ->query($sql);

header("location: aulas.html");

?>


