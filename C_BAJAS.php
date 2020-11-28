<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE BAJA</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="folio" required>
        <label for="folio">Folio</label>
        <br><input type="radio" name="Campo" value="f_baja" required>
        <label for="f_baja">Fecha de Baja</label>
        <br><input type="radio" name="Campo" value="municipio" required>
        <label for="municipio">Municipio</label>
        <br><input type="radio" name="Campo" value="hora" required>
        <label for="hora">Hora</label>
        <br><input type="radio" name="Campo" value="motivo" required>
        <label for="motivo">Motivo</label>
        <br><input type="radio" name="Campo" value="id_vehiculo" required>
        <label for="id_vehiculo">ID Vehiculo</label><br><br>
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
        $SQL = "SELECT * FROM bajas WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>Folio</b></td>
            <td><b>Fecha de Baja</b></td>
            <td><b>Municipio</b></td>
            <td><b>Hora</b></td>
            <td><b>Motivo</b></td>
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
                <td><?php echo $Fila[4]?></td>
                <td><?php echo $Fila[5]?></td>
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_BAJAS.php?SKU_Baj=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_BAJAS.php?Folio=<?php print($Fila[0]); ?>&Fecha=<?php print($Fila[1]); ?>&Municipio=<?php print($Fila[2]); ?>&Hora=<?php print($Fila[3]); ?>&Motivo=<?php print($Fila[4]); ?>&IdVehiculo=<?php print($Fila[5]); ?>">Actualizar</a></td>
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
