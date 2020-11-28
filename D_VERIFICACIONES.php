<?php
    $SKU_Ver = $_GET['SKU_Ver'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM verificaciones WHERE id_verificacion = '$SKU_Ver';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>