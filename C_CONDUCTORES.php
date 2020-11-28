<html>
<body>
    <form name="FormOne" action="" method="GET">
        <h1>BUSQUEDA DE CONDUCTOR</h1>
        <b><label for="Criterio">Criterio: </label></b>
        <input type="text" name="Criterio" required><br>
        <br><b><label>Busqueda Por Campo </label></b><br>
        <br><input type="radio" name="Campo" value="id_conductor" required>
        <label for="id_conductor">ID Conductor</label>
        <br><input type="radio" name="Campo" value="foto" required>
        <label for="foto">Foto</label>
        <br><input type="radio" name="Campo" value="huella" required>
        <label for="huella">Huella</label>
        <br><input type="radio" name="Campo" value="firma" required>
        <label for="firma">Firma</label>
        <br><input type="radio" name="Campo" value="nombre" required>
        <label for="nombre">Nombre</label>
        <br><input type="radio" name="Campo" value="f_nacimiento" required>
        <label for="f_nacimiento">Fecha de Nacimiento</label>
        <br><input type="radio" name="Campo" value="t_sangre" required>
        <label for="t_sangre">Tipo de Sangre</label>
        <br><input type="radio" name="Campo" value="observacion" required>
        <label for="observacion">Observación</label>
        <br><input type="radio" name="Campo" value="antiguedad" required>
        <label for="antiguedad">Antiguedad</label>
        <br><input type="radio" name="Campo" value="donador" required>
        <label for="donador">Donador</label>
        <br><input type="radio" name="Campo" value="t_emergencia" required>
        <label for="t_emergencia">Telefono de Emergencia</label><br><br>
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
        $SQL = "SELECT * FROM conductores WHERE $Campo = '$Criterio';";
        $Resultado = consultar($conn_MYSQL, $SQL);
        $n = mysqli_num_rows($Resultado);
        cerrar($conn_MYSQL);
?>

        <table width="70%" border="1px">
        <tr align="center">
            <td><b>ID Conductor</b></td>
            <td><b>Foto</b></td>
            <td><b>Huella</b></td>
            <td><b>Firma</b></td>
            <td><b>Nombre</b></td>
            <td><b>Fecha de Nacimiento</b></td>
            <td><b>Tipo de Sangre</b></td>
            <td><b>Observación</b></td>
            <td><b>Antiguedad</b></td>
            <td><b>Donador</b></td>
            <td><b>Telefono de Emergencia</b></td>
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
                <td><a href="D_CONDUCTORES.php?SKU_Condu=<?php print($Fila[0]); ?>">Eliminar</a></td>
                <td><a href="U_CONDUCTORES.php?IdConductor=<?php print($Fila[0]); ?>&Foto=<?php print($Fila[1]); ?>&Huella=<?php print($Fila[2]); ?>&Firma=<?php print($Fila[3]); ?>&Nombre=<?php print($Fila[4]); ?>&FechaNacimiento=<?php print($Fila[5]); ?>&TipoSangre=<?php print($Fila[6]); ?>&Observacion=<?php print($Fila[7]); ?>&Antiguedad=<?php print($Fila[8]); ?>&Donador=<?php print($Fila[9]); ?>&TelefonoEmergencia=<?php print($Fila[10]); ?>">Actualizar</a></td>
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
