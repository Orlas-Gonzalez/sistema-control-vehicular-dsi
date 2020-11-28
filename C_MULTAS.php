<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE MULTA</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="folio" required>
        <label for="folio">Folio</label>
        <br><input type="radio" name="Campo" value="nombre" required>
        <label for="nombre">Nombre</label>
        <br><input type="radio" name="Campo" value="concepto" required>
        <label for="concepto">Concepto</label>
        <br><input type="radio" name="Campo" value="no_infrac" required>
        <label for="no_infrac">No. de Infracción</label>
        <br><input type="radio" name="Campo" value="policia" required>
        <label for="policia">Policia</label>
        <br><input type="radio" name="Campo" value="fecha" required>
        <label for="fecha">Fecha</label>
        <br><input type="radio" name="Campo" value="hora" required>
        <label for="hora">Hora</label>
        <br><input type="radio" name="Campo" value="lugar" required>
        <label for="lugar">Lugar</label>
        <br><input type="radio" name="Campo" value="garantia" required>
        <label for="garantia">Garantia</label>
        <br><input type="radio" name="Campo" value="id_licencia" required>
        <label for="id_licencia">ID Licencia</label>
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
        $SQL = "SELECT * FROM multas WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>Folio</b></td>
            <td><b>Nombre</b></td>
            <td><b>Concepto</b></td>
            <td><b>No. de Infracción</b></td>
            <td><b>Policia</b></td>
            <td><b>Fecha</b></td>
            <td><b>Hora</b></td>
            <td><b>Lugar</b></td>
            <td><b>Garantia</b></td>
            <td><b>ID Licencia</b></td>
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
                <td><?php echo $Fila[8]?></td>
                <td><?php echo $Fila[9]?></td>
                <td><?php echo $Fila[10]?></td>
<?php
                if($_SESSION['Tipo'] == 'U'){
?>
                <td>No Aplica</td>
                <td>No Aplica</td>
<?php
                }else{
?>
                <td><a href="D_MULTAS.php?SKU_Mult=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_MULTAS.php?Folio=<?php print($Fila[0]); ?>&Nombre=<?php print($Fila[1]); ?>&Concepto=<?php print($Fila[2]); ?>&NoInfraccion=<?php print($Fila[3]); ?>&Policia=<?php print($Fila[4]); ?>&Fecha=<?php print($Fila[5]); ?>&Hora=<?php print($Fila[6]); ?>&Lugar=<?php print($Fila[7]); ?>&Garantia=<?php print($Fila[8]); ?>&IdLicencia=<?php print($Fila[9]); ?>&IdVehiculo=<?php print($Fila[10]); ?>">Actualizar</a></td>
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
