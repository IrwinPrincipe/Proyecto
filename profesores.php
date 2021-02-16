<?php

require 'conexion.php';

$where = "";



$sql = "SELECT * FROM persona";

$resultado = $mysqli -> query ($sql);
?>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HorariosInformatica</title>
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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="index.html">Escuela de Informatica</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <div class="container">
        <h1>Plana Docente</h1>
       
        
        
   <table >
            <div >
                <tr >
                    <th >ID</th>
                    <th >CODIGO</th>
                    <th >NOMBRES</th>
                    <th >APELLIDOS</th>
                    <th >DNI</th>
                    <th >TELEFONO</th>
                    <th >CORREO_ELEC</th>
                    
                    <th ></th>
                    <th ></th>
            </tr>
            
            </div>
            
        
        <tbody>
            <?php while ($row = $resultado -> fetch_array(MYSQLI_ASSOC)){?>
            <tr >
               
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['CODIGO'];?></td>
                <td><?php echo $row['NOMBRES'];?></td>
                <td><?php echo $row['APELLIDOS'];?></td>
                <td><?php echo $row['DNI'];?></td>
                <td><?php echo $row['TELEFONO'];?></td>
                <td><?php echo $row['CORREO_ELEC'];?></td>

                <td class="stil_mod_elim0"><a href="modprofesores.php? id=<?php echo $row['ID']; ?>">Modificar</a></td>
                <td class="stil_mod_elim00"><a href="eliminarprof.php?id=<?php echo $row['ID']; ?>">Eliminar</a></td>
                
                
                
            </tr>
            <?php } ?>
        </tbody>
        </table>     
        
        
        
        
        
        
        
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-right">Agregar Profesores</h4>
                </div>
                <div class="col-md-4"><a class="btn btn-primary btn-block" role="button" href="crearprofesor.html">Agregar</a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-right">Modificar Profesores</h4>
                </div>
                <div class="col-md-4"><a class="btn btn-primary btn-block" role="button" href="modprofesores.html">Agregar</a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-right">Eliminar Profesores</h4>
                </div>
                <div class="col-md-4"><a class="btn btn-primary btn-block" role="button" href="eliminarprof.html">Eliminar</a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>