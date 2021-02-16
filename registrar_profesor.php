<?php
    require 'conexion.php';

$codigo_profe = $_POST['codigo_profe'];
$nombre_profe = $_POST['nombre_profe'];
$apellidos_profe = $_POST['apellidos_profe'];
$dni_profe = $_POST['dni_profe'];
$celular_profe = $_POST['celular_profe'];
$correo_profe = $_POST['correo_profe'];


$sql = "INSERT INTO persona (CODIGO, NOMBRES, APELLIDOS, DNI, TELEFONO, CORREO_ELEC) VALUES('$codigo_profe', '$nombre_profe', '$apellidos_profe', '$dni_profe', '$celular_profe', '$correo_profe')";

    $resultado = $mysqli ->query($sql);

header("location: profesores.html");

?>

