<?php
    include ("conexion.php");
    $con=conectar();
    $idEstudiante=$_POST['idEstudiante'];
    $estCedula=$_POST['estCedula'];
    $estNombres=$_POST['estNombres'];
    $estApellidos=$_POST['estApellidos'];
    $estFechaNacimiento=$_POST['estFechaNacimiento'];
    $estTelefono=$_POST['estTelefono'];
    $estCorreo=$_POST['estCorreo'];
    $estRepresentantePadres=$_POST['estRepresentantePadres'];
    $estDireccion=$_POST['estDireccion'];

    $sql="UPDATE tbl_estudiante SET estCedula='$estCedula',estNombres='$estNombres',estApellidos='$estApellidos',estFechaNacimiento='$estFechaNacimiento',estTelefono='$estTelefono',estCorreo='$estCorreo',estRepresentantePadres='$estRepresentantePadres',estDireccion='$estDireccion', WHERE idEstudiante='$idEstudiante'";
    $query=mysqli_query($con,$sql);
        if($query){
            Header("Location: index.php");
        } 
?>