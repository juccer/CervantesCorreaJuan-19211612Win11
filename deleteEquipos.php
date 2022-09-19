<?php

include("conexion.php");
$con=conectar();

$IdEquipos=$_GET['id'];

$sql="DELETE FROM equipos  WHERE IdEquipos='$IdEquipos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipos.php");
    }
?>