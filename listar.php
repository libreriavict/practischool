<?php
    include("conexion.php");

    $sql="SELECT * FROM tbl_estudiante ";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query)

?>