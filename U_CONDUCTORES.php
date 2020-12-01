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
<html  
head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>CONDUCTORES</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
        <h1 class="Title">CONDUCTORES</h1>
        <div id="conductores">
            <label class="Texto">Id Conductor: </label><br>
            <input type="text" id="id_conductor" name="IdConductor" value="<?php print($IdConductor); ?>" required>
            <br><br>  
            <label class="Texto">Foto: </label><br>
            <input type="text" id="foto" name="Foto" value="<?php print($Foto); ?>" required>
            <br><br>  
            <label class="Texto">Huella: </label><br>
            <input type="text" id="huella" name="Huella" value="<?php print($Huella); ?>" required>
            <br><br>   
            <label class="Texto">Firma: </label><br>
            <input type="text" id="firma" name="Firma" value="<?php print($Firma); ?>" required>
            <br><br>    
            <label class="Texto">Nombre: </label><br>
            <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
            <br><br> 
            <label class="Texto">Fecha de Nacimiento: </label><br>
            <input type="text" id="f_nacimiento" name="FechaNacimiento" value="<?php print($FechaNacimiento); ?>">
            <br><br>  
        </div>  
        <div id="conductores2"> 
            <label for="t_sangre" class="Texto">Tipo de Sangre: </label><br>
            <input type="text" id="t_sangre" name="TipoSangre" value="<?php print($TipoSangre); ?>">
            <br><br>  
            <label class="Texto">Observacion: </label><br>
            <input type="text" id="observacion" name="Observacion" value="<?php print($Observacion); ?>">
            <br><br> 
            <label class="Texto">Antiguedad: </label><br>
            <input type="text" id="antiguedad" name="Antiguedad" value="<?php print($Antiguedad); ?>">
            <br><br> 
            <label class="Texto">Donador: </label><br>
            <input type="text" id="donador" name="Donador" value="<?php print($Donador); ?>">
            <br><br> 
            <label class="Texto">Telefono de Emergencia: </label><br>
            <input type="text" id="t_emergencia" name="TelefonoEmergencia" value="<?php print($TelefonoEmergencia); ?>">
            <br><br> 
            <input type="submit" name="F_CONDUCTORES">
            <input type="reset">
        </div>
    </div>
</form>


    </div>
</body>
</html>
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