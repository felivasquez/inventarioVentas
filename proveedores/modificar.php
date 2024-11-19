<?php
include("../conexion.php");
session_start();

// ID de la sesión
$id_viejo = $_SESSION["id"];

// valores del formulario
$Nombre = $_REQUEST['nombre'];
$contacto = $_REQUEST['contacto'];
$Telefono = $_REQUEST['telefono'];
$Direccion = $_REQUEST['Direccion'];

// consulta SQL 
$sql2 = "UPDATE proveedores SET Nombre = '$Nombre', Contacto = '$contacto', Telefono = '$Telefono', Direccion = '$Direccion'  
        WHERE ID_Proveedor = $id_viejo";

if (mysqli_query($conexion, $sql2)) {
    echo "Datos modificados correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";

} else {
    die("Error al modificar: " . mysqli_error($conexion));
}
?>
