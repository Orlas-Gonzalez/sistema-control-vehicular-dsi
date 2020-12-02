<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Multas</title>
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
    $folio = $_POST['Folio'];
    $nombre = $_POST['Nombre'];
    $concepto = $_POST['Concepto'];
    $no_infraccion = $_POST['NoInfraccion'];
    $policia = $_POST['Policia'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $lugar = $_POST['Lugar'];
    $garantia = $_POST['Garantia'];
    $id_licencia = $_POST['IdLicencia'];
    $id_vehiculo = $_POST['IdVehiculo'];
    
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO multas(folio, nombre, concepto, no_infrac, policia, fecha, hora, lugar, garantia, id_licencia, id_vehiculo) VALUES(NULL, '$nombre', '$concepto', '$no_infraccion', '$policia', '$fecha', '$hora', '$lugar', '$garantia', '$id_licencia', '$id_vehiculo');";
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