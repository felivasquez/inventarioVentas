<?php
include("../conexion.php");

// valores del formulario
$Nombre = $_REQUEST['nombre'];
$Apellido = $_REQUEST['ape'];
$Telefono = $_REQUEST['telefono'];
$Email = $_REQUEST['Email'];
$Direccion = $_REQUEST['Direccion'];

// sql para insertar un cliente
$sql = "INSERT INTO clientes (Nombre, Apellido, Telefono, Email, Direccion) 
    VALUES ('$Nombre', '$Apellido', '$Telefono', '$Email', '$Direccion')";

// ejecutar sql
if (mysqli_query($conexion, $sql)) {
    echo "Nuevo cliente añadido correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";
} else {
    die("Error al añadir cliente: " . mysqli_error($conexion));
}
?>
