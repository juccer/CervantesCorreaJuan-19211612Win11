<?php

include("conexion.php");
$con=conectar();

$IdPlayers=$_GET['id'];

$sql="DELETE FROM players  WHERE IdPlayers='$IdPlayers'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: player.php");
    }
?>