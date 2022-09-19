<?php

include("conexion.php");
$con=conectar();

$IdEquipos=$_POST['IdEquipos'];
$NameEquipo=$_POST['NameEquipo'];
$Localidad=$_POST['Localidad'];

$sql="UPDATE equipos SET  IdEquipos='$IdEquipos',NameEquipo='$NameEquipo',Localidad='$Localidad' WHERE IdEquipos='$IdEquipos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipos.php");
    }
?>