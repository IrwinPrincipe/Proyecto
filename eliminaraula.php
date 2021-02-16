<?php
    require 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM aula WHERE ID = '$id' ";
$resultado = $mysqli->query($sql);

header("location: aulas.php");

?>