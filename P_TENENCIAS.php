<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Tenencias</title>
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
    $id_tenencia = $_GET['IdTenencia'];
    $periodo = $_GET['Periodo'];
    $monto = $_GET['Monto'];
    $id_vehiculo = $_GET['IdVehiculo'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO tenencias(id_tenencia, periodo, monto, id_vehiculo) VALUES(NULL, '$periodo', '$monto', '$id_vehiculo');";
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