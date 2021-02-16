<?php
    require 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM persona WHERE ID = '$id' ";
$resultado = $mysqli->query($sql);

header("location: profesores.php");

?>