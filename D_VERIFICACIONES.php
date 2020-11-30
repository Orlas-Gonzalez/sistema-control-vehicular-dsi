<html>
<head>
    <link rel=StyleSheet href="S_DFORMULARIOS.css" type="text/css"> 
    <title>Eliminación de Verificaciones</title>
</head>
<body>
    <div class="Overlay">
        <img src="Images/CSS/eliminado.png" class="Registro">
        <a href="C_VERIFICACIONES.php"><button type="button" onclick="" name="SDUButtons" class="Btn">Regresar</button></a><br>
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
    </div>
</body>
</html>