<?php
    $SKU_Veh = $_GET['SKU_Veh'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM vehiculos WHERE id_vehiculo = '$SKU_Veh';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>