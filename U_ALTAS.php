<?php
    $Folio = $_GET['Folio'];
    $Fecha = $_GET['Fecha'];
    $Vigencia = $_GET['Vigencia'];
    $Municipio = $_GET['Municipio'];
    $Hora = $_GET['Hora'];
    $IdVehiculo= $_GET['IdVehiculo'];
?>

<form action="" method="POST">
    <h1>ALTAS</h1>
    <label>Folio: </label>
    <input type="text" id="folio" name="Folio" value="<?php print($Folio); ?>" required>
    <br></br>   
    <label>Fecha: </label>
    <input type="text" id="f_expedicion" name="Fecha" value="<?php print($Fecha); ?>" required>
    <br></br>   
    <label>Vigencia: </label>
    <input type="text" id="vigencia" name="Vigencia" value="<?php print($Vigencia); ?>" required>
    <br></br>   
    <label>Municipio: </label>
    <input type="text" id="municipio" name="Municipio" value="<?php print($Municipio); ?>" required>
    <br></br>   
    <label>Hora: </label>
    <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
    <br></br>   
    <label>Id Vehiculo: </label>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
    <br></br>   
    <input type="submit" name="F_ALTAS">
    <input type="reset">
</form>

<?php
    if(isset($_POST['Folio'])){
        $Folio = $_POST['Folio'];
        $Fecha = $_POST['Fecha'];
        $Vigencia = $_POST['Vigencia'];
        $Municipio = $_POST['Municipio'];
        $Hora = $_POST['Hora'];
        $IdVehiculo= $_POST['IdVehiculo'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE altas SET f_expedicion = '$Fecha', vigencia = '$Vigencia', municipio = '$Municipio', hora = '$Hora', id_vehiculo = '$IdVehiculo' WHERE folio = $Folio;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>