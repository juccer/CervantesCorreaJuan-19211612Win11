<?php
include("conexion.php");
$con=conectar();


$NameEstadio=$_POST['NameEstadio'];
$Colonia=$_POST['Colonia'];
$Renta=$_POST['Renta'];


$sql="INSERT INTO estadio VALUES('','$NameEstadio','$Colonia','$Renta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: estadio.php");
    
}else {
}
?>