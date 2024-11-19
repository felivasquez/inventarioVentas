<?php 
include('../conexion.php'); 
session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar clientes</title>
</head>
<body>
  <header>
    <a href="../inicio.html">Volver Inicio</a>
    <a href="añadir.html">Añadir Cliente</a>
  </header>
    
  <?php 
      $datosUser = "SELECT * FROM clientes";
      $resultado =  $conexion->query($datosUser);

      // verifica si hay datos en la tabla clientes 
      if ($resultado->num_rows > 0) {
        // mientras haya información que mostrar, muestra ?>
        <ol>
          <?php
          while ($row = $resultado->fetch_assoc()) { ?>
            <li class="">
              <p> <?php echo $row['Nombre'] ." ". $row['Apellido']; ?></p>
              <p> <?php echo $row['Email']; ?></p>
              <a href="modificarcliente.html" class="trash">Editar</a>
              <a href="borrar.php" class="trash">Borrar</a>
              <?php $_SESSION["id"]= $row['ID_Cliente']; ?>
            </li><?php
          }?> 
        </ol> <?php
      } else {
        echo "No hay registros";
      } ?>      
        
</body>
</html>