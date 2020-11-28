<?php
    $SKU_Condu = $_GET['SKU_Condu'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM conductores WHERE id_conductor = '$SKU_Condu';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>