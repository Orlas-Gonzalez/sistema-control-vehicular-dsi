<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE LICENCIA</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="id_licencia" required>
        <label for="id_licencia">ID Licencia</label>
        <br><input type="radio" name="Campo" value="t_licencia" required>
        <label for="t_licencia">Tipo de Licencia</label>
        <br><input type="radio" name="Campo" value="f_expedicion" required>
        <label for="f_expedicion">Fecha de Expecición</label>
        <br><input type="radio" name="Campo" value="autorizacion" required>
        <label for="autorizacion">Autorización</label>
        <br><input type="radio" name="Campo" value="id_conductor" required>
        <label for="id_conductor">ID Conductor</label><br><br>
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
        $SQL = "SELECT * FROM licencias WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>ID Licencia</b></td>
            <td><b>Tipo de Licencia</b></td>
            <td><b>Fecha de Expedición</b></td>
            <td><b>Autorización</b></td>
            <td><b>ID Conductor</b></td>
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
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_LICENCIAS.php?SKU_Lic=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_LICENCIAS.php?IdLicencia=<?php print($Fila[0]); ?>&TipoLicencia=<?php print($Fila[1]); ?>&FechaExpedicion=<?php print($Fila[2]); ?>&Autorizacion=<?php print($Fila[3]); ?>&IdConductor=<?php print($Fila[4]); ?>">Actualizar</a></td>
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
