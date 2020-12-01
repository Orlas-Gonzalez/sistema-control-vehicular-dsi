<?php
    $IdPropietario = $_GET['IdPropietario'];
    $RFC = $_GET['RFC'];
    $Nombre = $_GET['Nombre'];
?>
<html>  
<head>
<link rel=StyleSheet href="S_UFORMULARIO.css" type="text/css">
<title>PROPIETARIOS</title>
</head> 
<body>
    <div class="Overlay">
        <form action="" method="POST">
        <h1 class="Title">PROPIETARIOS</h1>
        <label class="Texto">Id Propietario: </label><br>
        <input type="text" id="id_propietario" name="IdPropietario" value="<?php print($IdPropietario); ?>" required>
        <br></br>   
        <label class="Texto">RFC: </label><br>
        <input type="text" id="rfc" name="RFC" value="<?php print($RFC); ?>" required>
        <br></br>   
        <label class="Texto">Nombre: </label><br>
        <input type="text" id="nombre" name="Nombre" value="<?php print($Nombre); ?>" required>
        <br></br>   
        <input type="submit" name="F_PROPIETARIOS">
        <input type="reset">
        </form>
    </div>
</body>
</html>

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