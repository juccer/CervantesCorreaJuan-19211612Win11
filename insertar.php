<?php
include("conexion.php");
$con=conectar();


$FullName=$_POST['FullName'];
$Gender=$_POST['Gender'];
$Category=$_POST['Category'];


$sql="INSERT INTO players VALUES('','$FullName','$Gender','$Category','')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: player.php");
    
}else {
}
?>