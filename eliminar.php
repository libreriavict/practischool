<?php
    include("conexion.php");


    $idEstudiante=$_GET['id'];

    $sql="DELETE FROM tbl_estudiante WHERE idEstudiante='$idEstudiante'";
    $query=mysqli_query($sql);

        if(query){
            Header("Location: index.php");
        }

?>