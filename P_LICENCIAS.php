<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Licencias</title>
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
    $id_licencia = $_REQUEST['IdLicencia'];
    $t_licencia = $_REQUEST['TipoLicencia'];
    $f_expedicion = $_REQUEST['FechaExpedicion'];
    $autorizacion = $_REQUEST['Autorizacion'];
    $id_conductor = $_REQUEST['IdConductor'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO licencias(id_licencia, t_licencia, f_expedicion, autorizacion, id_conductor) VALUES(NULL, '$t_licencia', '$f_expedicion', '$autorizacion', '$id_conductor');";
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