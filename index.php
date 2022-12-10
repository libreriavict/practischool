<?php
include("conexion.php");
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
                <th>NOMBRE DEL REPRESENTANTE DEL ALUMNO</th>
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
                            <a href="actualizar.php?id=<?php echo $row['idEstudiante']?>" class="btn btn-info">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row['idEstudiante']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                        <tr>
                    <?php
                    }
                    ?>
                </tr>   
            </tbody>
        </table>

        <div class="container">

            <form action="insertar.php" method="POST" class="row g-3 needs-validation">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="idEstudiante">
                    <label for="floatingInput">Id</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="estCedula">
                    <label for="floatingInput">Cedula</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="estNombres">
                    <label for="floatingInput">Nombres</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="estApellidos">
                    <label for="floatingInput">Apellidos</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="estFechaNacimiento">
                    <label for="floatingInput">Fecha de Nacimiento</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="estTelefono">
                    <label for="floatingInput">Telefono</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="estCorreo">
                    <label for="floatingInput">Correo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="estRepresentantePadres">
                    <label for="floatingInput">Nombre del Representate</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="estDireccion">
                    <label for="floatingInput">Direccion</label>
                </div>

                <input type="submit" class="btn btn-primary" value="Matricular Alumno">


            </form>
        </div>                
            <footer>
                <p>Copyright 2022</p>
                <p><a href=”#”>INSTITUTO QUITO</a></p>
                <p>PROYECTO AMBIENTES COMPUTACIONALES</p>
                <p>Síguenos en <a href=”https://github.com/libreriavict/practischool”>GITHUB</a></p>
            </footer>
    </div>



</body>

</html>