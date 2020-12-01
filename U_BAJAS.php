<?php
    $Folio = $_GET['Folio'];
    $Fecha = $_GET['Fecha'];
    $Municipio = $_GET['Municipio'];
    $Hora = $_GET['Hora'];
    $Motivo = $_GET['Motivo'];
    $IdVehiculo = $_GET['IdVehiculo'];
?>
<html  
head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>BAJAS</title>
</head> 
<body>
    <div class="Overlay">
    <form action="" method="POST">
    <h1 class="Title">BAJAS</h1>
    <label class="Texto">Folio: </label><br>
    <input type="text" id="folio" name="Folio" value="<?php print($Folio); ?>" required>
    <br></br>
    <label class="Texto">Fecha: </label><br>
    <input type="text" id="f_baja" name="Fecha" value="<?php print($Fecha); ?>" required>
    <br></br>   
    <label class="Texto">Municipio: </label><br>
    <input type="text" id="municipio" name="Municipio" value="<?php print($Municipio); ?>" required>
    <br></br>   
    <label class="Texto">Hora: </label><br>
    <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
    <br></br>   
    <label class="Texto">Motivo: </label><br>
    <input type="text" id="motivo" name="Motivo" value="<?php print($Motivo); ?>" required>
    <br></br>   
    <label class="Texto">Id Vehiculo: </label><br>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
    <br></br>      
    <input type="submit" name="F_BAJAS">
    <input type="reset">
</form>


    </div>
</body>
</html>

<?php
    if(isset($_POST['Folio'])){
        $Folio = $_POST['Folio'];
        $Fecha = $_POST['Fecha'];
        $Municipio = $_POST['Municipio'];
        $Hora = $_POST['Hora'];
        $Motivo = $_POST['Motivo'];
        $IdVehiculo = $_POST['IdVehiculo'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE bajas SET f_baja = '$Fecha', municipio = '$Municipio', hora = '$Hora', motivo = '$Motivo', id_vehiculo = '$IdVehiculo' WHERE folio = $Folio;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>