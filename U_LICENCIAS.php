<?php
    $IdLicencia = $_GET['IdLicencia'];
    $TipoLicencia = $_GET['TipoLicencia'];
    $FechaExpedicion = $_GET['FechaExpedicion'];
    $Autorizacion = $_GET['Autorizacion'];
    $IdConductor = $_GET['IdConductor'];
?>

<form action="" method="POST">
    <h1>LICENCIAS</h1>
    <label>Id Licencia: </label>
    <input type="text" id="id_licencia" name="IdLicencia" value="<?php print($IdLicencia); ?>" required>
    <br></br>   
    <label for="t_licencia">Tipo de Licencia: </label>
    <input type="text" id="t_licencia" name="TipoLicencia" value="<?php print($TipoLicencia); ?>" required>
    <br></br>   
    <label>Fecha de Expedición: </label>
    <input type="text" id="f_expedicion" name="FechaExpedicion" value="<?php print($FechaExpedicion); ?>" required>
    <br></br>   
    <label for="autorizacion">Autorizacion: </label>
    <input type="text" id="autorizacion" name="Autorizacion" value="<?php print($Autorizacion); ?>" required>
    <br></br>   
    <label>Id Conductor: </label>
    <input type="text" id="id_condutor" name="IdConductor" value="<?php print($IdConductor); ?>" required>
    <br></br>   
    <input type="submit" name="F_LICENCIAS">
    <input type="reset">
</form>

<?php
    if(isset($_POST['IdLicencia'])){
        $IdLicencia = $_POST['IdLicencia'];
        $TipoLicencia = $_POST['TipoLicencia'];
        $FechaExpedicion = $_POST['FechaExpedicion'];
        $Autorizacion = $_POST['Autorizacion'];
        $IdConductor = $_POST['IdConductor'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE licencias SET t_licencia = '$TipoLicencia', f_expedicion = '$FechaExpedicion', autorizacion = '$Autorizacion', id_conductor = '$IdConductor' WHERE id_licencia = $IdLicencia;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>