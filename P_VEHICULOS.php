<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Vehiculos</title>
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
    $id_vehiculo = $_POST['IdVehiculo'];
    $placa = $_POST['Placa'];
    $clave = $_POST['Clave'];
    $modelo = $_POST['Modelo'];
    $uso = $_POST['Uso'];
    $anio = $_POST['Anio'];
    $origen = $_POST['Origen'];
    $capacidad = $_POST['Capacidad'];
    $marca = $_POST['Marca'];
    $no_motor = $_POST['NoMotor'];
    $color = $_POST['Color'];
    $puerta = $_POST['Puerta'];
    $cilindro = $_POST['Cilindro'];
    $combustible = $_POST['Combustible'];
    $id_propietario = $_POST['IdPropietario'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO vehiculos(id_vehiculo, placa, clave, modelo, uso, anio, origen, capacidad, marca, no_motor, color, puerta, cilindro, combustible, id_propietario) VALUES(NULL, '$placa', '$clave', '$modelo', '$uso', '$anio', '$origen', '$capacidad', '$marca', '$no_motor', '$color', '$puerta', '$cilindro', '$combustible', '$id_propietario');";
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