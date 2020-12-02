<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Bajas</title>
</head>
<body>
    <div class="Overlay">
        <?php
            session_start();
            if($_SESSION['Tipo'] == 'U'){
        ?>
                <a href="MENU_USUARIO.php"><img src="Images/CSS/returng.png" class="Return"></a>
        <?php
            }else{
        ?>
                <a href="MENU_ADMINISTRADOR.php"><img src="Images/CSS/returng.png" class="Return"></a>
        <?php
            }
        ?>
<?php
    $folio = $_REQUEST['Folio'];
    $fecha = $_REQUEST['Fecha'];
    $municipio = $_REQUEST['Municipio'];
    $hora = $_REQUEST['Hora'];
    $motivo = $_REQUEST['Motivo'];
    $id_vehiculo = $_REQUEST['IdVehiculo'];
    
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO bajas VALUES(NULL, '$fecha', '$municipio', '$hora', '$motivo', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        echo("<img src='Images/CSS/exitoso.png' class='Registro'>");
    }else{
        echo("<img src='Images/CSS/fallido.png' class='Registro'>");
    }
    cerrar($conn_MYSQL);
?>
    </div>
</body>
</html>