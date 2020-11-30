<html>
<head>
    <link rel=StyleSheet href="S_DFORMULARIOS.css" type="text/css"> 
    <title>Eliminación de Vehiculos</title>
</head>
<body>
    <div class="Overlay">
        <img src="Images/CSS/eliminado.png" class="Registro">
        <a href="C_VEHICULOS.php"><img src="Images/CSS/returng.png" class="Return"></a>
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
    </div>
</body>
</html>