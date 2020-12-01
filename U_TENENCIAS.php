<?php
    $IdTenencia = $_GET['IdTenencia'];
    $Periodo = $_GET['Periodo'];
    $Monto = $_GET['Monto'];
    $IdVehiculo = $_GET['IdVehiculo'];
?>
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>TENENCIAS</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
            <h1 class="Title">TENENCIAS</h1>
            <label class="Texto">Id Tenencia: </label><br>
            <input type="text" id="id_tenencia" name="IdTenencia" value="<?php print($IdTenencia); ?>" required>
            <br></br>   
            <label class="Texto">Periodo: </label><br>
            <input type="text" id="periodo" name="Periodo" value="<?php print($Periodo); ?>" required>
            <br></br>   
            <label class="Texto">Monto: </label><br>
            <input type="text" id="monto" name="Monto" value="<?php print($Monto); ?>" required>
            <br></br>   
            <label class="Texto">Id Vehiculo: </label><br>
            <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
            <br></br>   
            <input type="submit" name="F_TENENCIAS">
            <input type="reset">
        </form>

    </div>
</body>
</html>

<?php
    if(isset($_POST['IdTenencia'])){
        $IdTenencia = $_POST['IdTenencia'];
        $Periodo = $_POST['Periodo'];
        $Monto = $_POST['Monto'];
        $IdVehiculo = $_POST['IdVehiculo'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE tenencias SET periodo = '$Periodo', monto = $Monto, id_vehiculo = '$IdVehiculo' WHERE id_tenencia = $IdTenencia;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>