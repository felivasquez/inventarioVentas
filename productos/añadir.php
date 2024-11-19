<?php
include("../conexion.php");

$nombre = $_REQUEST['nombre']; 
$precio_venta = $_REQUEST['precio_venta']; 
$precio_compra = $_REQUEST['precio_compra']; 
$categoria = $_REQUEST['categoria']; 
$stock = $_REQUEST['stock'];

// sql para insertar un cliente
$sql = "INSERT INTO `productos`(`Nombre`, `Categoria`, `PrecioCompra`, `PrecioVenta`, `StockActual`)
    VALUES ('$nombre', '$categoria',  '$precio_compra', '$precio_venta' , '$stock')";

// ejecutar sql
if (mysqli_query($conexion, $sql)) {
    echo "Nuevo producto añadido correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";
} else {
    die("Error al añadir producto: " . mysqli_error($conexion));
}
?>
