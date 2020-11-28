<?php
    $SKU_Ten = $_GET['SKU_Ten'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM tenencias WHERE id_tenencia = '$SKU_Ten';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>