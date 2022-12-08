<?php
    include("conexion.php");
    $con = conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_estudiante WHERE idEstudiante='$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="editar.php" method="POST">

            <input type="number" class="form-control mb-3" name="idEstudiante" value="<?php echo $row['idEstudiante']  ?>" placeholder="ID estudiante">
            <input type="number" class="form-control mb-3" name="estCedula" value="<?php echo $row['estCedula']  ?>" placeholder="Cedula">
            <input type="text" class="form-control mb-3" name="estNombres" value="<?php echo $row['estNombres']  ?>" placeholder="Nombres">
            <input type="text" class="form-control mb-3" name="estApellidos" value="<?php echo $row['estApellidos']  ?>" placeholder="Apellidos">
            <input type="date" class="form-control mb-3" name="estFechaNacimiento" value="<?php echo $row['estFechaNacimiento']  ?>" placeholder="Fecha Nacimiento">
            <input type="number" class="form-control mb-3" name="estTelefono" value="<?php echo $row['estTelefono']  ?>" placeholder="Telefono">
            <input type="email" class="form-control mb-3" name="estCorreo" value="<?php echo $row['estCorreo']  ?>" placeholder="Correo">
            <input type="text" class="form-control mb-3" name="estRepresentantePadres" value="<?php echo $row['estRepresentantePadres']  ?>" placeholder="Representante">
            <input type="text" class="form-control mb-3" name="estDireccion" value="<?php echo $row['estDireccion']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>