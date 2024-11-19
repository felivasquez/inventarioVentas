<?php
include("../conexion.php");
session_start();

// ID de la sesión
$id_viejo = $_SESSION["id"];

// valores del formulario
$nombre = $_REQUEST['nombre']; 
$precio_venta = $_REQUEST['precio_venta']; 
$precio_compra = $_REQUEST['precio_compra']; 
$categoria = $_REQUEST['categoria']; 
$stock = $_REQUEST['stock'];

// consulta SQL 
$sql2 = "UPDATE productos SET Nombre = '$nombre',  Categoria = '$categoria', PrecioCompra = '$precio_compra', PrecioVenta = '$precio_venta',  StockActual = '$stock'  
        WHERE ID_Producto = $id_viejo";

if (mysqli_query($conexion, $sql2)) {
    echo "Datos modificados correctamente.";
    echo "<a href='mostrar.php'>Volver atras</a>";
} else {
    die("Error al modificar: " . mysqli_error($conexion));
}
?>
