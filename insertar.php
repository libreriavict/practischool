<?php
include("conexion.php");

//$idEstudiante=$_POST['idEstudiante'];
$estCedula=$_POST['estCedula'];
$estNombres=$_POST['estNombres'];
$estApellidos=$_POST['estApellidos'];
$estFechaNacimiento=$_POST['estFechaNacimiento'];
$estTelefono=$_POST['estTelefono'];
$estCorreo=$_POST['estCorreo'];
$estRepresentantePadres=$_POST['estRepresentantePadres'];
$estDireccion=$_POST['estDireccion'];

$sql="INSERT INTO db_practischool VALUES ('$estCedula','$estNombres','$estApellidos','$estFechaNacimiento','$estTelefono','$estCorreo','$estRepresentantePadres','$estDireccion')";
$query=mysqli_query($sql);
?>