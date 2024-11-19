<?php
include("../conexion.php");

// valores del formulario
$Nombre = $_REQUEST['nombre'];
$contacto = $_REQUEST['contacto'];
$Telefono = $_REQUEST['telefono'];
$Direccion = $_REQUEST['Direccion'];

// sql para insertar un cliente
$sql = "INSERT INTO Proveedores (Nombre, Contacto, Telefono, Direccion) 
    VALUES ('$Nombre', '$contacto', '$Telefono', '$Direccion')";

// ejecutar sql
if (mysqli_query($conexion, $sql)) {
    echo "Nuevo cliente añadido correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";

} else {
    die("Error al añadir cliente: " . mysqli_error($conexion));
}
?>
