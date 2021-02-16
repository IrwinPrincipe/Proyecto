<?php
require 'conexion.php';

$id = $_POST['ID'];
$regitro_codigo_aula = $_POST['regitro_codigo_aula'];
$regitro_descripcion_aula = $_POST['regitro_descripcion_aula'];
$regitro_aula = $_POST['regitro_aula'];
$regitro_foro_aula = $_POST['regitro_foro_aula'];

$estado_aula = $_POST['estado_aula'];



$sql = "UPDATE aula SET CODIGO='$regitro_codigo_aula', DESCRIPCION = '$regitro_descripcion_aula', NOMBRE = '$regitro_aula', AFORO ='$regitro_foro_aula',  ESTADO = '$estado_aula' where ID='$id' " ;

$resultado = $mysqli ->query($sql);

header("location: aulas.php");

?>

