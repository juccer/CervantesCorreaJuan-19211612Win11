<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM equipos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Equipos</title>
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
                                <form action="insertarEquipos.php" method="POST">
                                <input type="text" class="form-control mb-3" name="IdEquipos" placeholder="IdEquipos">
                                    <input type="text" class="form-control mb-3" name="NameEquipo" placeholder="NameEquipo">
                                    <input type="text" class="form-control mb-3" name="Localidad" placeholder="Localidad">
                              
                            
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <h2 class="text-center">Equipos</h2>
                            <table class="table" >
                                <thead class="table-secondary table-striped" >
                                    <tr>
                                        <th>Id </th>
                                        <th>Equipo</th>
                                        <th>Localidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdEquipos']?></th>
                                                <th><?php  echo $row['NameEquipo']?></th>
                                                <th><?php  echo $row['Localidad']?></th>
                                                <th><a href="actualizarEquipo.php?id=<?php echo $row['IdEquipos'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteEquipos.php?id=<?php echo $row['IdEquipos'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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