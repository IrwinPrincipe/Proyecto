<?php
require 'conexion.php';

$id = $_POST['ID'];
$codigo_profe = $_POST['codigo_profe'];
$nombre_profe = $_POST['nombre_profe'];
$apellidos_profe = $_POST['apellidos_profe'];
$dni_profe = $_POST['dni_profe'];
$celular_profe = $_POST['celular_profe'];
$correo_profe = $_POST['correo_profe'];



$sql = "UPDATE persona SET CODIGO='$codigo_profe', NOMBRES = '$nombre_profe', APELLIDOS = '$apellidos_profe', DNI ='$dni_profe ', TELEFONO = '$celular_profe', CORREO_ELEC ='$correo_profe' where ID='$id' " ;

$resultado = $mysqli ->query($sql);

header("location: profesores.php");

?>

