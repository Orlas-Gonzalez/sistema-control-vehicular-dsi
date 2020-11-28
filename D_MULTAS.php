<?php
    $SKU_Mult = $_GET['SKU_Mult'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM multas WHERE folio = '$SKU_Mult';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>