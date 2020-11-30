<html>
<head>
        <link rel=StyleSheet href="S_CFORMULARIOS.css" type="text/css"> 
        <title>Consulta de Verificaciones</title>
</head>
<body>
        <div class="Overlay">
                <form name="FormOne" action="" method="GET" id="Formulario">
                        <h1 class="Title">BUSQUEDA DE VERIFICACIONES</h1>
                        <b><label for="Criterio" class="Title">Criterio: </label></b>
                        <input type="text" name="Criterio" id="Criterio" required><br>
                        <br><b><label class="Title">Busqueda Por Campo </label></b><br>
                        <br><input type="radio" name="Campo" value="id_verificacion" required>
                        <label for="id_verificacion" class="RB">ID Verificacion</label>
                        <br><input type="radio" name="Campo" value="periodo" required>
                        <label for="periodo" class="RB">Periodo</label>
                        <br><input type="radio" name="Campo" value="dictamen" required>
                        <label for="dictamen" class="RB">Dictamen</label>
                        <br><input type="radio" name="Campo" value="fecha" required>
                        <label for="fecha" class="RB">Fecha</label>
                        <br><input type="radio" name="Campo" value="hora" required>
                        <label for="hora" class="RB">Hora</label>
                        <br><input type="radio" name="Campo" value="c_verificacion" required>
                        <label for="c_verificacion" class="RB">Centro de Verificacion</label>
                        <br><input type="radio" name="Campo" value="t_verificador" required>
                        <label for="t_verificador" class="RB">Tecnico Verificador</label>
                        <br><input type="radio" name="Campo" value="id_vehiculo" required>
                        <label for="id_vehiculo" class="RB">ID Vehiculo</label><br><br>
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
                        $SQL = "SELECT * FROM verificaciones WHERE $Campo = '$Criterio';";
                        $Resultado = consultar($conn_MYSQL, $SQL);
                        $n = mysqli_num_rows($Resultado);
                        cerrar($conn_MYSQL);
                ?>

                        <table width="70%" border="1px" class="TableS">
                        <tr align="center" class="Header">
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
                        printf("<div class='RowsS'><b>Número de filas encontradas: </b>".$n."</div>");
                }
                ?>
        </div>
</body>
</html>
