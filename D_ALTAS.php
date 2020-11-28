<?php
    $SKU_Alt = $_GET['SKU_Alt'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM altas WHERE folio = '$SKU_Alt';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>