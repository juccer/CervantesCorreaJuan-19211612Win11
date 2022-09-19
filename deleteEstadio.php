<?php

include("conexion.php");
$con=conectar();

$IdEstadio=$_GET['id'];

$sql="DELETE FROM estadio  WHERE IdEstadio='$IdEstadio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estadio.php");
    }
?>