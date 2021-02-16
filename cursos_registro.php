<?php
    require 'conexion.php';

$codigo_curso = $_POST['codigo_curso'];
$ciclo_curso = $_POST['ciclo_curso'];
$nombre_curso = $_POST['nombre_curso'];
$credito_curso = $_POST['credito_curso'];
//$abreviacion_curso = $_POST['abreviacion_curso'];
//$horas_curso = $_POST['horas_curso'];

//$sql = "INSERT INTO curso (NOMBRE,ABREVIATURA,HORAS) VALUES('$nombre_curso', '$abreviacion_curso', '$horas_curso')";

$sql = "INSERT INTO curso (CODIGO, CICLO, NOMBRE, CREDITOS) VALUES('$codigo_curso', '$ciclo_curso', '$nombre_curso', '$credito_curso')";

    $resultado = $mysqli ->query($sql);

header("location: cursos.html");

?>



