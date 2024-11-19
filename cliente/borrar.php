<?php
    include ("../conexion.php");

    session_start();

    $idCLiente = $_SESSION["id"];
    $sql= "DELETE FROM `Clientes` WHERE `ID_cliente` = $idCLiente ";
    mysqli_query($conexion,$sql)or die ("problemas es select".mysqli.error($conexion));
    mysqli_close($conexion);
    echo "se borro correctamente";
    echo "<a href='mostrar.php'>Volver atras</a>";

    ?>
</body>
</html>