<?php
    $SKU_Baj = $_GET['SKU_Baj'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM bajas WHERE folio = '$SKU_Baj';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>