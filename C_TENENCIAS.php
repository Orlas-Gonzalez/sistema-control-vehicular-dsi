<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE TENENCIA</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="id_tenencia" required>
        <label for="id_tenencia">ID Tenencia</label>
        <br><input type="radio" name="Campo" value="periodo" required>
        <label for="periodo">Periodo</label>
        <br><input type="radio" name="Campo" value="monto" required>
        <label for="monto">Monto</label>
        <br><input type="radio" name="Campo" value="id_vehiculo" required>
        <label for="id_vehiculo">ID Vehiculos</label><br><br>
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
        $SQL = "SELECT * FROM tenencias WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>ID Tenencia</b></td>
            <td><b>Periodo</b></td>
            <td><b>Monto</b></td>
            <td><b>ID Vehiculo</b></td>
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
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_TENENCIAS.php?SKU_Ten=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_TENENCIAS.php?IdTenencia=<?php print($Fila[0]); ?>&Periodo=<?php print($Fila[1]); ?>&Monto=<?php print($Fila[2]); ?>&IdVehiculo=<?php print($Fila[3]); ?>">Actualizar</a></td>
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
