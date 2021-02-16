<?php
    require 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM curso WHERE ID = '$id' ";
$resultado = $mysqli->query($sql);

header("location: cursos.php");

?>