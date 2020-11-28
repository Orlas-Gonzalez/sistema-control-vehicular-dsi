<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE VERIFICACIONES</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="id_verificacion" required>
        <label for="id_verificacion">ID Verificacion</label>
        <br><input type="radio" name="Campo" value="periodo" required>
        <label for="periodo">Periodo</label>
        <br><input type="radio" name="Campo" value="dictamen" required>
        <label for="dictamen">Dictamen</label>
        <br><input type="radio" name="Campo" value="fecha" required>
        <label for="fecha">Fecha</label>
        <br><input type="radio" name="Campo" value="hora" required>
        <label for="hora">Hora</label>
        <br><input type="radio" name="Campo" value="c_verificacion" required>
        <label for="c_verificacion">Centro de Verificacion</label>
        <br><input type="radio" name="Campo" value="t_verificador" required>
        <label for="t_verificador">Tecnico Verificador</label>
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
        $SQL = "SELECT * FROM verificaciones WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>ID Verificacion</b></td>
            <td><b>Periodo</b></td>
            <td><b>Dictamen</b></td>
            <td><b>Fecha</b></td>
            <td><b>Hora</b></td>
            <td><b>Centro de Verifiacion</b></td>
            <td><b>Tecnico Verificador</b></td>
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
                <td><?php echo $Fila[6]?></td>
                <td><?php echo $Fila[7]?></td>
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_VERIFICACIONES.php?SKU_Ver=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_VERIFICACIONES.php?IdVerificacion=<?php print($Fila[0]); ?>&Periodo=<?php print($Fila[1]); ?>&Dictamen=<?php print($Fila[2]); ?>&Fecha=<?php print($Fila[3]); ?>&Hora=<?php print($Fila[4]); ?>&CVerificacion=<?php print($Fila[5]); ?>&TVerificador=<?php print($Fila[6]); ?>&IdVehiculo=<?php print($Fila[7]); ?>">Actualizar</a></td>
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
