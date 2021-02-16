<?php

require 'conexion.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT COUNT(*) as contar FROM admi WHERE CORREO = '$email' AND CONTRASENIA = '$password' ";
    $consulta = mysqli_query($mysqli,$sql);

    $array= mysqli_fetch_array($consulta);


    if($array['contar'] > 0 ){
        
        header("location: index.html");

        
    }else{
        echo'<script>
        alert("DATOS INCORRECTOS. INTENTELO OTRA VEZ");
        window.history.go(-1);
        </script>';
        
    }


?>














