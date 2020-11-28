<?php
    $IdTenencia = $_GET['IdTenencia'];
    $Periodo = $_GET['Periodo'];
    $Monto = $_GET['Monto'];
    $IdVehiculo = $_GET['IdVehiculo'];
?>

<form action="" method="POST">
    <h1>TENENCIAS</h1>
    <label>Id Tenencia: </label>
    <input type="text" id="id_tenencia" name="IdTenencia" value="<?php print($IdTenencia); ?>" required>
    <br></br>   
    <label>Periodo: </label>
    <input type="text" id="periodo" name="Periodo" value="<?php print($Periodo); ?>" required>
    <br></br>   
    <label>Monto: </label>
    <input type="text" id="monto" name="Monto" value="<?php print($Monto); ?>" required>
    <br></br>   
    <label>Id Vehiculo: </label>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>">
    <br></br>   
    <input type="submit" name="F_TENENCIAS">
    <input type="reset">
</form>

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