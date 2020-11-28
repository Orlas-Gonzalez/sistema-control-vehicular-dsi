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

<form action="" method="POST">
    <h1>VERIFICACIONES</h1>
    <label>Id Verificacion: </label>
    <input type="text" id="id_verificacion" name="IdVerificacion" value="<?php print($IdVerificacion); ?>" required>
    <br></br>   
    <label>Periodo: </label>
    <input type="text" id="periodo" name="Periodo" value="<?php print($Periodo); ?>" required>
    <br></br>   
    <label for="dictamen">Dictamen: </label>
    <input type="text" id="dictamen" name="Dictamen" value="<?php print($Dictamen); ?>" required>
    <br></br>   
    <label>Fecha: </label>
    <input type="text" id="fecha" name="Fecha" value="<?php print($Fecha); ?>" required>
    <br></br>   
    <label>Hora: </label>
    <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
    <br></br>   
    <label>Centro de Verificacion: </label>
    <input type="text" id="c_verificacion" name="CVerificacion" value="<?php print($CVerificacion); ?>" required>
    <br></br>   
    <label>Tecnico Verificador: </label>
    <input type="text" id="t_verificador" name="TVerificador" value="<?php print($TVerificador); ?>" required>
    <br></br>   
    <label>Id Vehiculo: </label>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
    <br></br>   
    <input type="submit" name="F_VERIFICACIONES">
    <input type="reset">
</form>

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