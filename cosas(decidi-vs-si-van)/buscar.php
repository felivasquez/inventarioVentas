<?php
include ("conexion.php");
session_start();
$_SESSION["dni"]=$_REQUEST["dni"];
$dni=$_REQUEST['dni'];

$sql="DELETE FROM  'Clientes' WHERE 'ID_cliente'=$ID_Cli"; //La clave importante es !!!DNI
    $registros=mysqli_query($conexion, $sql);
if($array=mysqli_fetch_array($registros)){
$Nombre=$array['nombre'];
$Apellido=$array['ape'];
$Telefono=$array['Telefono'];
$ID_Cli=$array['ID_cliente'];
$Email=$array['Email'];
$Direccion=$array['Direccion'];

}
?>
    



