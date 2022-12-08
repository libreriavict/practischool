<?php
    include("conexion.php");
    //conexion de la base de datos
    $con=conectar();
    $sql="SELECT * FROM tbl_estudiante ";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query)

?>