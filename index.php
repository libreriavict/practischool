<?php
    include("conexion.php");

    $estudiante = "SELECT * FROM tbl_estudiante";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Practi</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container">
        <div class="navigation">
            <div class="menu-toggle"></div>
            <ul class="list">
                <li class="list-item active" style="color:#f44336"><a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="text">Inicio</span>
                </a></li>

                <li class="list-item active" style="color:#ffa117"><a href="#">
                    <span class="icon">
                        <ion-icon name="alert-outline"></ion-icon>
                    </span>
                    <span class="text">Noticias</span>
                </a></li>

                <li class="list-item active" style="color:#0fc70f"><a href="#">
                    <span class="icon">
                        <ion-icon name="call-outline"></ion-icon>
                    </span>
                    <span class="text">Contactos</span>
                </a></li>

                <li class="list-item active" style="color:#2196f3"><a href="#">
                    <span class="icon">
                        <ion-icon name="grid-outline"></ion-icon>
                    </span>
                    <span class="text">Matricula</span>
                </a></li>
            </ul>
        </div>
    </div>


<div class="container-table">

    <div class="table__header">Cedula</div>
    <div class="table__header">Nombres</div>
    <div class="table__header">Apellidos</div>
    <div class="table__header">Fecha de Nacimiento</div>
    <div class="table__header">Telefono</div>
    <div class="table__header">Correo</div>
    <div class="table__header">Representante del Alumno</div>
    <div class="table__header">Direccion</div>

    <?php
        $resultado = mysqli_query($conexion, $estudiante);

        while($row = mysqli_fetch_assoc($resultado)){
    ?>

            <div class="table__item"><?php echo $row["estCedula"]; ?></div>
            <div class="table__item"><?php echo $row["estNombres"]; ?></div>
            <div class="table__item"><?php echo $row["estApellidos"]; ?></div>
            <div class="table__item"><?php echo $row["estFechaNacimiento"]; ?></div>
            <div class="table__item"><?php echo $row["estTelefono"]; ?></div>
            <div class="table__item"><?php echo $row["estCorreo"]; ?></div>
            <div class="table__item"><?php echo $row["estRepresentantePadres"]; ?></div>
            <div class="table__item"><?php echo $row["estDireccion"]; ?></div>
        
    <?php
        }
    ?>

</div>

    <h1>Hola Mundo</h1>
</body>
</html>