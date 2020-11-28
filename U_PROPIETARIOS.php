<?php
    $IdPropietario = $_GET['IdPropietario'];
    $RFC = $_GET['RFC'];
    $Nombre = $_GET['Nombre'];
?>

<form action="" method="POST">
    <h1>PROPIETARIOS</h1>
    <label>Id Propietario: </label>
    <input type="text" id="id_propietario" name="IdPropietario" value="<?php print($IdPropietario); ?>" required>
    <br></br>   
    <label>RFC: </label>
    <input type="text" id="rfc" name="RFC" value="<?php print($RFC); ?>" required>
    <br></br>   
    <label>Nombre: </label>
    <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
    <br></br>   
    <input type="submit" name="F_PROPIETARIOS">
    <input type="reset">
</form>

<?php
    if(isset($_POST['IdPropietario'])){
        $IdPropietario = $_POST['IdPropietario'];
        $RFC = $_POST['RFC'];
        $Nombre = $_POST['Nombre'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "UPDATE propietarios SET RFC = '$RFC', nombre = '$Nombre' WHERE id_propietario = $IdPropietario;";
        $Resultado = consultar($conn_MYSQL, $SQL);
        cerrar($conn_MYSQL);
    }
?>