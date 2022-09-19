<?php
include("conexion.php");
$con=conectar();

$IdEquipos=$_POST['IdEquipos'];
$NameEquipo=$_POST['NameEquipo'];
$Localidad=$_POST['Localidad'];


$sql="INSERT INTO equipos VALUES('$IdEquipos','$NameEquipo','$Localidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: equipos.php");
    
}else {
}
?>