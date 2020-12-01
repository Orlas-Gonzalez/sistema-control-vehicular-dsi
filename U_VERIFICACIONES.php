<?php
    $IdVerificacion = $_GET['IdVerificacion'];
    $Periodo = $_GET['Periodo'];
    $Dictamen = $_GET['Dictamen'];
    $Fecha = $_GET['Fecha'];
    $Hora = $_GET['Hora'];
    $CVerificacion = $_GET['CVerificacion'];
    $TVerificador = $_GET['TVerificador'];
    $IdVehiculo = $_GET['IdVehiculo'];
?>
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>VERIFICACIONES</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
            <h1 class="Title">VERIFICACIONES</h1>
            <div id="verificacion1">
                <label class="Texto">Id Verificacion: </label><br>
                <input type="text" id="id_verificacion" name="IdVerificacion" value="<?php print($IdVerificacion); ?>" required>
                <br></br>   
                <label class="Texto">Periodo: </label><br>
                <input type="text" id="periodo" name="Periodo" value="<?php print($Periodo); ?>" required>
                <br></br>   
                <label for="dictamen" class="Texto">Dictamen: </label><br>
                <input type="text" id="dictamen" name="Dictamen" value="<?php print($Dictamen); ?>" required>
                <br></br>   
                <label class="Texto">Fecha: </label><br>
                <input type="text" id="fecha" name="Fecha" value="<?php print($Fecha); ?>" required>
                <br></br>   
                <label class="Texto">Hora: </label><br>
                <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
                <br></br>   
            </div>
            <div id="verificacion2">
                <label class="Texto">Centro de Verificacion: </label><br>
                <input type="text" id="c_verificacion" name="CVerificacion" value="<?php print($CVerificacion); ?>" required>
                <br></br>   
                <label class="Texto">Tecnico Verificador: </label><br>
                <input type="text" id="t_verificador" name="TVerificador" value="<?php print($TVerificador); ?>" required>
                <br></br>   
                <label class="Texto">Id Vehiculo: </label><br>
                <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
                <br></br>   
                <input type="submit" name="F_VERIFICACIONES">
                <input type="reset">
            </div>
        </form>

    </div>
</body>
</html>

<?php
    if(isset($_POST['IdVerificacion'])){
        $IdVerificacion = $_POST['IdVerificacion'];
        $Periodo = $_POST['Periodo'];
        $Dictamen = $_POST['Dictamen'];
        $Fecha = $_POST['Fecha'];
        $Hora = $_POST['Hora'];
        $CVerificacion = $_POST['CVerificacion'];
        $TVerificador = $_POST['TVerificador'];
        $IdVehiculo = $_POST['IdVehiculo'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE verificaciones SET periodo = '$Periodo', Dictamen = '$Dictamen', fecha = '$Fecha', hora = '$Hora', c_verificacion = '$CVerificacion', t_verificador = '$TVerificador', id_vehiculo = '$IdVehiculo' WHERE id_verificacion = $IdVerificacion;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>