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