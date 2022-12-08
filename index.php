<?php
include("conexion.php");
$con = conectar();
$estudiante = "SELECT * FROM tbl_estudiante";
include("conexion.php");
//conexion de la base de datos
$con = conectar();
$estudiante = "SELECT * FROM tbl_estudiante";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>School Practi</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light" id="">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PRACTIS SCHOOL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">BUSCAR</button>
            </form>
        </div>
    </nav>

    <div class="container-sm">

        <table class="table">
            <thead>
                <th>CEDULA</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>REPRESENTANTE DEL ALUMNO</th>
                <th>DIRECCION</th>
                <th>OPCIONES</th>
            </thead>
            <tbody>
                <tr class="table-active">

                    <?php
                    $resultado = mysqli_query($con, $estudiante);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                    ?>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estCedula"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estNombres"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estApellidos"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estFechaNacimiento"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estTelefono"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estCorreo"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estRepresentantePadres"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="table__item">
                                <?php echo $row["estDireccion"]; ?>
                            </div>
                        </td>

                        <td>                            
                            <a href="editar.php?id=<?php echo $row['idEstudiante']?>" class="btn btn-info">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row['idEstudiante']?>" class="btn btn-info">Eliminar</a>
                        </td>

                    <?php
                    }
                    ?>
                </tr>   
            </tbody>
        </table>

        <div class="container">

            <form class="row g-3 needs-validation">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombres" placeholder="Nombres">
                    <label for="floatingInput">Nombres</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos">
                    <label for="floatingInput">Apellidos</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="Fecha" placeholder="Fecha">
                    <label for="floatingInput">Fecha de Nacimiento</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Telefono" placeholder="Telefono">
                    <label for="floatingInput">Telefono</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="Correo" placeholder="name@example.com">
                    <label for="floatingInput">Correo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Representate" placeholder="Representate">
                    <label for="floatingInput">Nombre del Representate</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Direccion" placeholder="Direccion">
                    <label for="floatingInput">Direccion</label>
                </div>

                <button type="button" class="btn btn-primary">Matricular Alumno</button>


            </form>

            <footer>
                <p>Copyright 2022</p>
                <p><a href=”#”>INSTITUTO QUITO</a></p>
                <p>PROYECTO AMBIENTES COMPUTACIONALES</p>
                <p>Síguenos en <a href=”https://github.com/libreriavict/practischool”>GITHUB</a></p>
            </footer>




</body>

</html>