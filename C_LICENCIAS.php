<html>
<head>
        <link rel=StyleSheet href="S_CFORMULARIOS.css" type="text/css">
        <title>Consulta de Licencias</title>
</head>
<body>
        <div class="Overlay">
        <form name="FormOne" action="" method="GET" id="Formulario">
                        <h1 class="Title">BUSQUEDA DE LICENCIA</h1>
                        <b><label for="Criterio" class="Title">Criterio: </label></b>
                        <input type="text" name="Criterio" id="Criterio" required><br>
                        <br><b><label class="Title">Busqueda Por Campo </label></b><br>
                        <br><input type="radio" name="Campo" value="id_licencia" required>
                        <label for="id_licencia" class="RB">ID Licencia</label>
                        <br><input type="radio" name="Campo" value="t_licencia" required>
                        <label for="t_licencia" class="RB">Tipo de Licencia</label>
                        <br><input type="radio" name="Campo" value="f_expedicion" required>
                        <label for="f_expedicion" class="RB">Fecha de Expecición</label>
                        <br><input type="radio" name="Campo" value="autorizacion" required>
                        <label for="autorizacion" class="RB">Autorización</label>
                        <br><input type="radio" name="Campo" value="id_conductor" required>
                        <label for="id_conductor" class="RB">ID Conductor</label><br><br>
                        <input type="submit" name="Send" class="Btn">
                <?php
                        session_start();
                        if($_SESSION['Tipo'] == 'U'){
                ?>
                        <a href="MENU_USUARIO.php"><button type="button" class="Btn">Regresar Al Menú</button></a>
                <?php
                        }else{
                ?>
                        <a href="MENU_ADMINISTRADOR.php"><button type="button" class="Btn">Regresar Al Menú</button></a>
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

                        <table width="70%" border="1px" class="Table">
                        <tr align="center" class="Header">
                        <td><b>ID Licencia</b></td>
                        <td><b>Tipo de Licencia</b></td>
                        <td><b>Fecha de Expedición</b></td>
                        <td><b>Autorización</b></td>
                        <td><b>ID Conductor</b></td>
                        <td><b>Eliminar</b></td>
                        <td><b>Actualizar</b></td>
                        <td><b>Licencia</b></td>
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
                                <td><a href="G_LICENCIA_PDF.php?IdLicencia=<?php print($Fila[0]); ?>">Visualizar</a></td>
                <?php
                                }
                ?>
                        </tr>
                <?php
                        }
                ?>
                        </table>
                <?php
                        printf("<div class='Rows'><b>Número de filas encontradas: </b>".$n."</div>");
                }
                ?>
        </div>
</body>
</html>
