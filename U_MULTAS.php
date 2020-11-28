<?php
    $Folio = $_GET['Folio'];
    $Nombre = $_GET['Nombre'];
    $Concepto = $_GET['Concepto'];
    $NoInfraccion = $_GET['NoInfraccion'];
    $Policia = $_GET['Policia'];
    $Fecha = $_GET['Fecha'];
    $Hora = $_GET['Hora'];
    $Lugar = $_GET['Lugar'];
    $Garantia = $_GET['Garantia'];
    $IdLicencia = $_GET['IdLicencia'];
    $IdVehiculo = $_GET['IdVehiculo'];
?>

<form action="" method="POST">
    <h1>MULTAS</h1>
    <label>Folio: </label>
    <input type="text" id="folio" name="Folio" value="<?php print($Folio); ?>" required>
    <br></br>   
    <label>Nombre: </label>
    <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
    <br></br>   
    <label>Concepto: </label>
    <input type="text" id="concepto" name="Concepto" value="<?php print($Concepto); ?>" required>
    <br></br>   
    <label>No. Infraccion: </label>
    <input type="text" id="no_infraccion" name="NoInfraccion" value="<?php print($NoInfraccion); ?>" required>
    <br></br>   
    <label>Policia: </label>
    <input type="text" id="policia" name="Policia" value="<?php print($Policia); ?>" required>
    <br></br>   
    <label>Fecha: </label>
    <input type="text" id="fecha" name="Fecha" value="<?php print($Fecha); ?>" required>
    <br></br>   
    <label>Hora: </label>
    <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
    <br></br>   
    <label>Lugar: </label>
    <input type="text" id="lugar" name="Lugar" value="<?php print($Lugar); ?>" required>
    <br></br>   
    <label>Garantia: </label>
    <input type="text" id="garantia" name="Garantia" value="<?php print($Garantia); ?>">
    <br></br>   
    <label>Id Licencia: </label>
    <input type="text" id="id_licencia" name="IdLicencia" value="<?php print($IdLicencia); ?>">
    <br></br>   
    <label>Id Vehiculo: </label>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
    <br></br>   
    <input type="submit" name="F_MULTAS">
    <input type="reset">
</form>

<?php
    if(isset($_POST['Folio'])){
        $Folio = $_POST['Folio'];
        $Nombre = $_POST['Nombre'];
        $Concepto = $_POST['Concepto'];
        $NoInfraccion = $_POST['NoInfraccion'];
        $Policia = $_POST['Policia'];
        $Fecha = $_POST['Fecha'];
        $Hora = $_POST['Hora'];
        $Lugar = $_POST['Lugar'];
        $Garantia = $_POST['Garantia'];
        $IdLicencia = $_POST['IdLicencia'];
        $IdVehiculo = $_POST['IdVehiculo'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE multas SET nombre = '$Nombre', concepto = '$Concepto', no_infrac = '$NoInfraccion', policia = '$Policia', fecha = '$Fecha', hora = '$Hora', lugar = '$Lugar', garantia = '$Garantia', id_licencia = '$IdLicencia', id_vehiculo = '$IdVehiculo' WHERE folio = $Folio;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>