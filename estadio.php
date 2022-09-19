<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM estadio";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Estadios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <br>
        <a href="player.php" class="badge badge-secondary">   </a>

    <div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-success" href="player.php" role="button">Jugadores</a>
    <a class="btn btn-secondary" href="equipos.php" role="button">Equipos</a>
    <a class="btn btn-primary" href="estadio.php" role="button">estadio</a>
</div>    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h2>Ingrese datos</h2>
                                <form action="insertarEstadio.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="NameEstadio" placeholder="Estadio">
                                    <input type="text" class="form-control mb-3" name="Colonia" placeholder="Colonia">
                                    <input type="text" class="form-control mb-3" name="Renta" placeholder="Costo de renta">
                            
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                        <h2 class="text-center">Estadios</h2>
                            <table class="table" >
                                <thead class="table-primary table-striped" >
                                    <tr>
                                        <th>Id </th>
                                        <th>Estadio</th>
                                        <th>Colonia</th>
                                        <th>Renta</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdEstadio']?></th>
                                                <th><?php  echo $row['NameEstadio']?></th>
                                                <th><?php  echo $row['Colonia']?></th>
                                                <th><?php  echo $row['Renta']?></th>
                                                <th><a href="actualizarest.php?id=<?php echo $row['IdEstadio'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteEstadio.php?id=<?php echo $row['IdEstadio'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>