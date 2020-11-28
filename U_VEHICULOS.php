<?php
    $IdVehiculo = $_GET['IdVehiculo'];
    $Placa = $_GET['Placa'];
    $Clave = $_GET['Clave'];
    $Modelo = $_GET['Modelo'];
    $Uso = $_GET['Uso'];
    $Anio = $_GET['Anio'];
    $Origen = $_GET['Origen'];
    $Capacidad = $_GET['Capacidad'];
    $Marca = $_GET['Marca'];
    $NoMotor = $_GET['NoMotor'];
    $Color = $_GET['Color'];
    $Puerta = $_GET['Puerta'];
    $Cilindro = $_GET['Cilindro'];
    $Combustible = $_GET['Combustible'];
    $IdPropietario = $_GET['IdPropietario'];
?>

<form action="" method="POST">
    <h1>VEHICULOS</h1>
    <label>Id Vehiculo: </label>
    <input type="text" id="id_vehiculo" name="IdVehiculo" value="<?php print($IdVehiculo); ?>" required>
    <br></br>   
    <label>Placa: </label>
    <input type="text" id="placa" name="Placa" value="<?php print($Placa); ?>" required>
    <br></br>   
    <label>Clave: </label>
    <input type="text" id="clave" name="Clave" value="<?php print($Clave); ?>" required>
    <br></br>   
    <label>Modelo: </label>
    <input type="text" id="modelo" name="Modelo" value="<?php print($Modelo); ?>" required>
    <br></br>   
    <label>Uso: </label>
    <input type="text" id="uso" name="Uso" value="<?php print($Uso); ?>" required>
    <br></br>   
    <label>Anio: </label>
    <input type="text" id="anio" name="Anio" value="<?php print($Anio); ?>" required>
    <br></br>   
    <label>Origen: </label>
    <input type="text" id="origen" name="Origen" value="<?php print($Origen); ?>" required>
    <br></br>   
    <label>Capacidad: </label>
    <input type="text" id="capacidad" name="Capacidad" value="<?php print($Capacidad); ?>" required>
    <br></br>   
    <label>Marca: </label>
    <input type="text" id="marca" name="Marca" value="<?php print($Marca); ?>">
    <br></br>   
    <label>No. Motor: </label>
    <input type="text" id="no_motor" name="NoMotor" value="<?php print($NoMotor); ?>">
    <br></br>   
    <label>Color: </label>
    <input type="text" id="color" name="Color" value="<?php print($Color); ?>">
    <br></br>   
    <label>Puerta: </label>
    <input type="text" id="puerta" name="Puerta" value="<?php print($Puerta); ?>">
    <br></br>   
    <label>Cilindro: </label>
    <input type="text" id="cilindro" name="Cilindro" value="<?php print($Cilindro); ?>">
    <br></br>   
    <label>Combustible: </label>
    <input type="text" id="combustible" name="Combustible" value="<?php print($Combustible); ?>">
    <br></br>   
    <label>Id Propietario: </label>
    <input type="text" id="id_propietario" name="IdPropietario" value="<?php print($IdPropietario); ?>">
    <br></br>   
    <input type="submit" name="F_VEHICULOS">
    <input type="reset">
</form>

<?php
    if(isset($_POST['IdVehiculo'])){
        $IdVehiculo = $_POST['IdVehiculo'];
        $Placa = $_POST['Placa'];
        $Clave = $_POST['Clave'];
        $Modelo = $_POST['Modelo'];
        $Uso = $_POST['Uso'];
        $Anio = $_POST['Anio'];
        $Origen = $_POST['Origen'];
        $Capacidad = $_POST['Capacidad'];
        $Marca = $_POST['Marca'];
        $NoMotor = $_POST['NoMotor'];
        $Color = $_POST['Color'];
        $Puerta = $_POST['Puerta'];
        $Cilindro = $_POST['Cilindro'];
        $Combustible = $_POST['Combustible'];
        $IdPropietario = $_POST['IdPropietario'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE vehiculos SET placa = '$Placa', clave = '$Clave', modelo = '$Modelo', uso = '$Uso', anio = '$Anio', origen = '$Origen', capacidad = '$Capacidad', marca = '$Marca', no_motor = '$NoMotor', color = '$Color', puerta = '$Puerta', cilindro = '$Cilindro', combustible = '$Combustible', id_propietario = '$IdPropietario' WHERE id_vehiculo = $IdVehiculo;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>