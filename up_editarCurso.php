<?php
require 'conexion.php';

$id = $_POST['ID'];
$codigo_curso = $_POST['codigo_curso'];
$ciclo_curso = $_POST['ciclo_curso'];
$nombre_curso = $_POST['nombre_curso'];
$credito_curso = $_POST['credito_curso'];



$sql = "UPDATE curso SET CODIGO='$codigo_curso', CICLO = '$ciclo_curso', NOMBRE = '$nombre_curso', CREDITOS ='$credito_curso' where ID='$id' " ;

$resultado = $mysqli ->query($sql);

header("location: cursos.php");

?>

