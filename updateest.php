<?php

include("conexion.php");
$con=conectar();

$IdEstadio=$_POST['IdEstadio'];
$NameEstadio=$_POST['NameEstadio'];
$Colonia=$_POST['Colonia'];
$Renta=$_POST['Renta'];

$sql="UPDATE estadio SET  NameEstadio='$NameEstadio',Colonia='$Colonia',Renta='$Renta' WHERE IdEstadio='$IdEstadio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estadio.php");
    }
?>