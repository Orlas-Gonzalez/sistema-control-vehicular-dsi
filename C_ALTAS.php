<html>
<head>
        <link rel=StyleSheet href="S_CFORMULARIOS.css" type="text/css">
        <title>Consulta de Altas</title>
</head>
<body>
        <div class="Overlay">
                <form name="FormOne" action="" method="GET" id="Formulario">
                        <h1 class="Title">BUSQUEDA DE ALTAS</h1>
                        <b><label for="Criterio" class="Title">Criterio: </label></b>
                        <input type="text" name="Criterio" id="Criterio" required><br>
                        <br><b><label class="Title">Busqueda Por Campo </label></b><br>
                        <br><input type="radio" name="Campo" value="folio" required>
                        <label for="folio" class="RB">Folio</label>
                        <br><input type="radio" name="Campo" value="f_expedicion" required>
                        <label for="f_expedicion" class="RB">Fecha de Expedición</label>
                        <br><input type="radio" name="Campo" value="vigencia" required>
                        <label for="vigencia" class="RB">Vigencia</label>
                        <br><input type="radio" name="Campo" value="municipio" required>
                        <label for="municipio" class="RB">Municipio</label>
                        <br><input type="radio" name="Campo" value="hora" required>
                        <label for="hora" class="RB">Hora</label>
                        <br><input type="radio" name="Campo" value="id_vehiculo" required>
                        <label for="id_vehiculo" class="RB">Id Vehiculo</label><br><br>
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
                                $SQL = "SELECT * FROM altas WHERE $Campo = '$Criterio';";
                                $Resultado = consultar($conn_MYSQL, $SQL);
                                $n = mysqli_num_rows($Resultado);
                                cerrar($conn_MYSQL);
                        ?>

                                <table width="70%" border="1px" class="Table">
                                <tr align="center" class="Header">
                                <td><b>Folio</b></td>
                                <td><b>Fecha de Expedición</b></td>
                                <td><b>Vigencia</b></td>
                                <td><b>Municipio</b></td>
                                <td><b>Hora</b></td>
                                <td><b>Id Vehiculo</b></td>
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
                                        <td><a href="D_ALTAS.php?SKU_Alt=<?php print($Fila[0]); ?>">Eliminar</a></td>
                                        <td><a href="U_ALTAS.php?Folio=<?php print($Fila[0]); ?>&Fecha=<?php print($Fila[1]); ?>&Vigencia=<?php print($Fila[2]); ?>&Municipio=<?php print($Fila[3]); ?>&Hora=<?php print($Fila[4]); ?>&IdVehiculo=<?php print($Fila[5]); ?>">Actualizar</a></td>
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
