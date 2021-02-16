<?php
    require 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];



    $sql = "INSERT INTO admi (CORREO, CONTRASENIA) VALUES('$email', '$password')";

    $resultado = $mysqli ->query($sql); 
    
    
    

    
echo'<script>
        alert("Se creo correctamente su cuenta");
        window.history.go(-1);
        </script>';
    







/*
$sql = "INSERT INTO admi (CORREO, CONTRASENIA) VALUES('$email', '$password')";

    $resultado = $mysqli ->query($sql);


if(!isset($email) || !isset($password) || !isset($password_repeat)){
     $sql = "INSERT INTO admi (CORREO, CONTRASENIA) VALUES('$email', '$password')";

    $resultado = $mysqli ->query($sql);
    
}else{
    $sql = "INSERT INTO admi (CORREO, CONTRASENIA) VALUES('$email', '$password')";

    $resultado = $mysqli ->query($sql);

header("location: login.html");

   
}*/



?>





