<?php
include("../conexion.php");
session_start();

// ID de la sesión
$id_viejo = $_SESSION["id"];

// valores del formulario
$Nombre = $_REQUEST['nombre'];
$Apellido = $_REQUEST['ape'];
$Telefono = $_REQUEST['telefono'];
$Email = $_REQUEST['Email'];
$Direccion = $_REQUEST['Direccion'];

// consulta SQL 
$sql2 = "UPDATE clientes SET Nombre = '$Nombre', Apellido = '$Apellido', Telefono = '$Telefono', Email = '$Email', Direccion = '$Direccion'  
        WHERE ID_cliente = $id_viejo";

if (mysqli_query($conexion, $sql2)) {
    echo "Datos modificados correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";
} else {
    die("Error al modificar: " . mysqli_error($conexion));
}
?>
