<?php
    $IdLicencia = $_GET['IdLicencia'];
    $TipoLicencia = $_GET['TipoLicencia'];
    $FechaExpedicion = $_GET['FechaExpedicion'];
    $Autorizacion = $_GET['Autorizacion'];
    $IdConductor = $_GET['IdConductor'];
?>
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>LICENCIAS</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
        <h1 class="Title">LICENCIAS</h1>
        <label class="Texto">Id Licencia: </label><br>
        <input type="text" id="id_licencia" name="IdLicencia" value="<?php print($IdLicencia); ?>" required>
        <br></br>   
        <label for="t_licencia" class="Texto">Tipo de Licencia: </label><br>
        <input type="text" id="t_licencia" name="TipoLicencia" value="<?php print($TipoLicencia); ?>" required>
        <br></br>   
        <label class="Texto">Fecha de Expedición: </label><br>
        <input type="text" id="f_expedicion" name="FechaExpedicion" value="<?php print($FechaExpedicion); ?>" required>
        <br></br>   
        <label for="autorizacion" class="Texto">Autorizacion: </label><br>
        <input type="text" id="autorizacion" name="Autorizacion" value="<?php print($Autorizacion); ?>" required>
        <br></br>   
        <label class="Texto">Id Conductor: </label><br>
        <input type="text" id="id_condutor" name="IdConductor" value="<?php print($IdConductor); ?>" required>
        <br></br>   
        <input type="submit" name="F_LICENCIAS">
        <input type="reset">
        </form>
    </div>
</body>
</html>

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