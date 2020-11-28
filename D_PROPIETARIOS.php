<?php
    $SKU_Prop = $_GET['SKU_Prop'];
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "DELETE FROM propietarios WHERE id_propietario = '$SKU_Prop';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Afectados = mysqli_affected_rows($conn_MYSQL);
    print("<b>Número de Registros Eliminados: </b>".$Afectados);    
    cerrar($conn_MYSQL);
?>