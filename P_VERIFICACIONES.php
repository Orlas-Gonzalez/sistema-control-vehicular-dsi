<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Verificaciones</title>
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
    $id_verificacion = $_REQUEST['IdVerificacion'];
    $periodo = $_REQUEST['Periodo'];
    $dictamen = $_REQUEST['Dictamen'];
    $fecha = $_REQUEST['Fecha'];
    $hora = $_REQUEST['Hora'];
    $c_verificacion = $_REQUEST['CVerificacion'];
    $t_verificador = $_REQUEST['TVerificador'];
    $id_vehiculo = $_REQUEST['IdVehiculo'];
    
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO verificaciones(id_verificacion, periodo, dictamen, fecha, hora, c_verificacion, t_verificador, id_vehiculo) VALUES(NULL, '$periodo', '$dictamen', '$fecha', '$hora', '$c_verificacion', '$t_verificador', '$id_vehiculo');";
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