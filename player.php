<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM players";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA Jugadores</title>
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
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="FullName" placeholder="Nombre Completo">
                                    <input type="text" class="form-control mb-3" name="Gender" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="Category" placeholder="Categoria">
                            
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                        <h2 class="text-center">Jugadores</h2>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id </th>
                                        <th>Nombre</th>
                                        <th>Genero </th>
                                        <th>Categoria</th>
                                        <th>Fecha de Registro</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdPlayers']?></th>
                                                <th><?php  echo $row['FullName']?></th>
                                                <th><?php  echo $row['Gender']?></th>
                                                <th><?php  echo $row['Category']?></th>
                                                <th><?php  echo $row['Registration']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IdPlayers'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdPlayers'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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