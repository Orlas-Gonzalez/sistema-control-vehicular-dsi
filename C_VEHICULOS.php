<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE VEHICULOS</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="id_vehiculo" required>
        <label for="id_vehiculo">ID Vehiculo</label>
        <br><input type="radio" name="Campo" value="placa" required>
        <label for="placa">Placa</label>
        <br><input type="radio" name="Campo" value="clave" required>
        <label for="clave">Clave</label>
        <br><input type="radio" name="Campo" value="modelo" required>
        <label for="modelo">Modelo</label>
        <br><input type="radio" name="Campo" value="uso" required>
        <label for="uso">Uso</label>
        <br><input type="radio" name="Campo" value="anio" required>
        <label for="anio">Año</label>
        <br><input type="radio" name="Campo" value="origen" required>
        <label for="origen">Origen</label>
        <br><input type="radio" name="Campo" value="capacidad" required>
        <label for="capacidad">Capacidad</label>
        <br><input type="radio" name="Campo" value="marca" required>
        <label for="marca">Marca</label>
        <br><input type="radio" name="Campo" value="no_motor" required>
        <label for="no_motor">No. de Motor</label>
        <br><input type="radio" name="Campo" value="color" required>
        <label for="color">Color</label>
        <br><input type="radio" name="Campo" value="puerta" required>
        <label for="puerta">Puerta</label>
        <br><input type="radio" name="Campo" value="cilindro" required>
        <label for="cilindro">Cilindro</label>
        <br><input type="radio" name="Campo" value="combustible" required>
        <label for="combustible">Combustible</label>
        <br><input type="radio" name="Campo" value="id_propietario" required>
        <label for="id_propietario">ID Propietario</label><br><br>
        <input type="submit" name="Send">
<?php
        session_start();
        if($_SESSION['Tipo'] == 'U'){
?>
        <a href="MENU_USUARIO.php"><button type="button">Regresar Al Menú</button></a>
<?php
        }else{
?>
        <a href="MENU_ADMINISTRADOR.php"><button type="button">Regresar Al Menú</button></a>
<?php
        }
?>
    </form>
<?php
    if(isset($_GET['Send'])){
        $Campo = $_GET['Campo'];
        $Criterio = $_GET['Criterio'];
        include("Controlador.php");
        $conn_MYSQL = conectar();
        $SQL = "SELECT * FROM vehiculos WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="100%" border="1px">
        <tr align="center">
            <td><b>ID Vehiculo</b></td>
            <td><b>Placa</b></td>
            <td><b>Clave</b></td>
            <td><b>Modelo</b></td>
            <td><b>Uso</b></td>
            <td><b>Año</b></td>
            <td><b>Origen</b></td>
            <td><b>Capacidad</b></td>
            <td><b>Marca</b></td>
            <td><b>No. de Motor</b></td>
            <td><b>Color</b></td>
            <td><b>Puerta</b></td>
            <td><b>Clilindro</b></td>
            <td><b>Combustible</b></td>
            <td><b>ID Propietario</b></td>
            <td><b>Eliminar</b></td>
            <td><b>Actualizar</b></td>
        </tr>
<?php
        while ($Fila = mysqli_fetch_row($Resultado)) {
?>  
            <tr align="center">
                <td><?php echo $Fila[0]?></td>
                <td><?php echo $Fila[1]?></td>
                <td><?php echo $Fila[2]?></td>
                <td><?php echo $Fila[3]?></td>
                <td><?php echo $Fila[4]?></td>
                <td><?php echo $Fila[5]?></td>
                <td><?php echo $Fila[6]?></td>
                <td><?php echo $Fila[7]?></td>
                <td><?php echo $Fila[8]?></td>
                <td><?php echo $Fila[9]?></td>
                <td><?php echo $Fila[10]?></td>
                <td><?php echo $Fila[11]?></td>
                <td><?php echo $Fila[12]?></td>
                <td><?php echo $Fila[13]?></td>
                <td><?php echo $Fila[14]?></td>
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_VEHICULOS.php?SKU_Veh=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_VEHICULOS.php?IdVehiculo=<?php print($Fila[0]); ?>&Placa=<?php print($Fila[1]); ?>&Clave=<?php print($Fila[2]); ?>&Modelo=<?php print($Fila[3]); ?>&Uso=<?php print($Fila[4]); ?>&Anio=<?php print($Fila[5]); ?>&Origen=<?php print($Fila[6]); ?>&Capacidad=<?php print($Fila[7]); ?>&Marca=<?php print($Fila[8]); ?>&NoMotor=<?php print($Fila[9]); ?>&Color=<?php print($Fila[10]); ?>&Puerta=<?php print($Fila[11]); ?>&Cilindro=<?php print($Fila[12]); ?>&Combustible=<?php print($Fila[13]); ?>&IdPropietario=<?php print($Fila[14]); ?>">Actualizar</a></td>
<?php
                }
?>
            </tr>
<?php
        }
?>
        </table>
<?php
        printf("<b>Número de filas encontradas: </b>".$n);
    }
?>
</body>
</html>
