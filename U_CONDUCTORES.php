<?php
    $IdConductor = $_GET['IdConductor'];
    $Foto = $_GET['Foto'];
    $Huella = $_GET['Huella'];
    $Firma = $_GET['Firma'];
    $Nombre = $_GET['Nombre'];
    $FechaNacimiento = $_GET['FechaNacimiento'];
    $TipoSangre = $_GET['TipoSangre'];
    $Observacion = $_GET['Observacion'];
    $Antiguedad = $_GET['Antiguedad'];
    $Donador = $_GET['Donador'];
    $TelefonoEmergencia = $_GET['TelefonoEmergencia'];
?>

<form action="" method="POST">
    <h1>CONDUCTORES</h1>
    <label>Id Conductor: </label>
    <input type="text" id="id_conductor" name="IdConductor" value="<?php print($IdConductor); ?>" required>
    <br><br>  
    <label>Foto: </label>
    <input type="text" id="foto" name="Foto" value="<?php print($Foto); ?>" required>
    <br><br>  
    <label>Huella: </label>
    <input type="text" id="huella" name="Huella" value="<?php print($Huella); ?>" required>
    <br><br>   
    <label>Firma: </label>
    <input type="text" id="firma" name="Firma" value="<?php print($Firma); ?>" required>
    <br><br>    
    <label>Nombre: </label>
    <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
    <br><br>   
    <label>Fecha de Nacimiento: </label>
    <input type="text" id="f_nacimiento" name="FechaNacimiento" value="<?php print($FechaNacimiento); ?>">
    <br><br>   
    <label for="t_sangre">Tipo de Sangre: </label>
    <input type="text" id="t_sangre" name="TipoSangre" value="<?php print($TipoSangre); ?>">
    <br><br>  
    <label>Observacion: </label>
    <input type="text" id="observacion" name="Observacion" value="<?php print($Observacion); ?>">
    <br><br> 
    <label>Antiguedad: </label>
    <input type="text" id="antiguedad" name="Antiguedad" value="<?php print($Antiguedad); ?>">
    <br><br> 
    <label>Donador: </label><br>
    <input type="text" id="donador" name="Donador" value="<?php print($Donador); ?>">
    <br><br> 
    <label>Telefono de Emergencia: </label>
    <input type="text" id="t_emergencia" name="TelefonoEmergencia" value="<?php print($TelefonoEmergencia); ?>">
    <br><br> 
    <input type="submit" name="F_CONDUCTORES">
    <input type="reset">
</form>

<?php
    if(isset($_POST['IdConductor'])){
        $IdConductor = $_POST['IdConductor'];
        $Foto = $_POST['Foto'];
        $Huella = $_POST['Huella'];
        $Firma = $_POST['Firma'];
        $Nombre = $_POST['Nombre'];
        $FechaNacimiento = $_POST['FechaNacimiento'];
        $TipoSangre = $_POST['TipoSangre'];
        $Observacion = $_POST['Observacion'];
        $Antiguedad = $_POST['Antiguedad'];
        $Donador = $_POST['Donador'];
        $TelefonoEmergencia = $_POST['TelefonoEmergencia'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE conductores SET foto = '$Foto', huella = '$Huella', firma = '$Firma', nombre = '$Nombre', f_nacimiento = '$FechaNacimiento', t_sangre = '$TipoSangre', observacion = '$Observacion', antiguedad = '$Antiguedad', donador = '$Donador', t_emergencia = '$TelefonoEmergencia' WHERE id_conductor = $IdConductor;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>