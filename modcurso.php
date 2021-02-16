<?php
require 'conexion.php';

$id=$_GET['id'];

$sql = "SELECT * FROM curso WHERE ID= '$id'";
$resultado = $mysqli ->query($sql);
$row = $resultado -> fetch_array(MYSQLI_ASSOC);


?>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HorariosInformatica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Staff-Directory.css">
    <link rel="stylesheet" href="assets/css/stylecrearhor.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background-color: rgba(255,255,255,0.88);">
        <div class="container-fluid"><a class="navbar-brand" href="index.html">Escuela de Informatica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Menu</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="aulas.php">Aulas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="cursos.php">Cursos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profesores.php">Profesores</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="horarios.html">Horarios</a></li>
                </ul>
        </div>
        </div>
    </nav>
    
    
  
    
    
    <form action="up_editarCurso.php" method="post" class="formulariopro "name="registro_02">
        <h1 class="formulariopro__titulo">Modificar Curso</h1>
        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>" > 
        
        <label for="" class="form__label">Código del Curso: </label>
        <input class ="form-control" type="text" name="codigo_curso" placeholder="Codigo" value="<?php echo $row['CODIGO']; ?>">
        
        <label for="" class="form__label">Ciclo: </label>
        <select class="formulariopro__input auxiliar" name="ciclo_curso" id="codigo">
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
            <option value="X">X</option>
        </select>   
        
        
        <label for="" class="form__label">Nombre: </label>
        <input type="text" class="formulariopro__input" name="nombre_curso" value="<?php echo $row['NOMBRE']; ?>">
        
         <label for="" class="form__label">Creditos: </label>
        <input type="text" class="formulariopro__input" name="credito_curso" value="<?php echo $row['CREDITOS']; ?>">
        
 
        <div class="botones">            
            <input type="submit" class="formularioboton__submit" value="Guardar">
            <input type="submit" class="formularioboton__submit" value="Cancelar">
        </div>
    </form>
    
    <script src="assets/js/animated.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>