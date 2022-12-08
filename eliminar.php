<?php
    include("conexion.php");
    //conexion de la base de datos
    $con=conectar();

    $idEstudiante=$_GET['id'];

    $sql="DELETE FROM tbl_estudiante WHERE idEstudiante='$idEstudiante'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: index.php");
        }

?>