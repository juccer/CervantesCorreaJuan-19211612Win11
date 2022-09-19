<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM estadio WHERE IdEstadio='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateest.php" method="POST">
                    
                                <input type="hidden" name="IdEstadio" value="<?php echo $row['IdEstadio']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="NameEstadio" placeholder="nombre" value="<?php echo $row['NameEstadio']  ?>">
                                <input type="text" class="form-control mb-3" name="Colonia" placeholder="Colonia" value="<?php echo $row['Colonia']  ?>">
                                <input type="text" class="form-control mb-3" name="Renta" placeholder="Renta" value="<?php echo $row['Renta']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-success" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>