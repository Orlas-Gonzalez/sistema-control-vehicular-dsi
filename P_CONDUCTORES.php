<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Conductores</title>
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
    $id_conductor = $_REQUEST['IdConductor'];
    $foto = $_REQUEST['Foto'];
    $huella = $_REQUEST['Huella'];
    $firma = $_REQUEST['Firma'];
    $nombre = $_REQUEST['Nombre'];
    $fecha_nacimiento = $_REQUEST['FechaNacimiento'];
    $t_sangre = $_REQUEST['TipoSangre'];
    $observacion = $_REQUEST['Observacion'];
    $antiguedad = $_REQUEST['Antiguedad'];
    $donador = $_REQUEST['Donador'];
    $t_emergencia = $_REQUEST['TelefonoEmergencia'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO conductores VALUES(NULL, '$foto', '$huella', '$firma', '$nombre', '$fecha_nacimiento', '$t_sangre', '$observacion', '$antiguedad', '$donador', '$t_emergencia');";
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