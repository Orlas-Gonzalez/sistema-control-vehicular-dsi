<?php
    $Folio = $_GET['Folio'];
    $Fecha = $_GET['Fecha'];
    $Vigencia = $_GET['Vigencia'];
    $Municipio = $_GET['Municipio'];
    $Hora = $_GET['Hora'];
    $IdVehiculo= $_GET['IdVehiculo'];
?>
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>ALTAS</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
            <h1 class="Title">ALTAS</h1>
            <label class="Texto">Folio: </label><br>
            <input type="text" id="folio" name="Folio" value="<?php print($Folio); ?>" required>
            <br></br>   
            <label class="Texto">Fecha: </label><br>
            <input type="text" id="f_expedicion" name="Fecha" value="<?php print($Fecha); ?>" required>
            <br></br>   
            <label class="Texto">Vigencia: </label><br>
            <input type="text" id="vigencia" name="Vigencia" value="<?php print($Vigencia); ?>" required>
            <br></br>   
            <label class="Texto">Municipio: </label><br>
            <input type="text" id="municipio" name="Municipio" value="<?php print($Municipio); ?>" required>
            <br></br>   
            <label class="Texto">Hora: </label><br>
            <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
            <br></br>   
            <label class="Texto">Id Vehiculo: </label><br>
            <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
            <br></br>   
            <input type="submit" name="F_ALTAS">
            <input type="reset">
        </form>

    </div>
</body>
</html>
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