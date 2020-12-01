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
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>MULTAS</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
            <h1 class="Title">MULTAS</h1>
            <div id="multas1">
                <label class="Texto">Folio: </label><br>
                <input type="text" id="folio" name="Folio" value="<?php print($Folio); ?>" required>
                <br></br>   
                <label class="Texto">Nombre: </label><br>
                <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
                <br></br>   
                <label class="Texto">Concepto: </label><br>
                <input type="text" id="concepto" name="Concepto" value="<?php print($Concepto); ?>" required>
                <br></br>   
                <label class="Texto">No. Infraccion: </label><br>
                <input type="text" id="no_infraccion" name="NoInfraccion" value="<?php print($NoInfraccion); ?>" required>
                <br></br>   
                <label class="Texto">Policia: </label><br>
                <input type="text" id="policia" name="Policia" value="<?php print($Policia); ?>" required>
                <br></br>   
                <label class="Texto">Fecha: </label><br>
                <input type="text" id="fecha" name="Fecha" value="<?php print($Fecha); ?>" required>
                <br></br>  
            </div>
                
          <div id="multas2">
                <label class="Texto">Hora: </label><br>
                <input type="text" id="hora" name="Hora" value="<?php print($Hora); ?>" required>
                <br></br>   
                <label class="Texto">Lugar: </label><br>
                <input type="text" id="lugar" name="Lugar" value="<?php print($Lugar); ?>" required>
                <br></br>   
                <label class="Texto">Garantia: </label><br>
                <input type="text" id="garantia" name="Garantia" value="<?php print($Garantia); ?>">
                <br></br>   
                <label class="Texto">Id Licencia: </label><br>
                <input type="text" id="id_licencia" name="IdLicencia" value="<?php print($IdLicencia); ?>">
                <br></br>   
                <label class="Texto">Id Vehiculo: </label><br>
                <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
                <br></br>   
                <input type="submit" name="F_MULTAS">
                <input type="reset">
            </div>
        </form>


    </div>
</body>
</html>

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