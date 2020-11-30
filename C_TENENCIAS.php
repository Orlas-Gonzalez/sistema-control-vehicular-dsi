<html>
<head>
        <link rel=StyleSheet href="S_CFORMULARIOS.css" type="text/css">
        <title>Consulta de Tenencias</title>
</head>
<body>
        <div class="Overlay">
                <form name="FormOne" action="" method="GET" id="Formulario">
                        <h1 class="Title">BUSQUEDA DE TENENCIA</h1>
                        <b><label for="Criterio" class="Title">Criterio: </label></b>
                        <input type="text" name="Criterio" id="Criterio" required><br>
                        <br><b><label class="Title">Busqueda Por Campo </label></b><br>
                        <br><input type="radio" name="Campo" value="id_tenencia" required>
                        <label for="id_tenencia" class="RB">ID Tenencia</label>
                        <br><input type="radio" name="Campo" value="periodo" required>
                        <label for="periodo" class="RB">Periodo</label>
                        <br><input type="radio" name="Campo" value="monto" required>
                        <label for="monto" class="RB">Monto</label>
                        <br><input type="radio" name="Campo" value="id_vehiculo" required>
                        <label for="id_vehiculo" class="RB">ID Vehiculos</label><br><br>
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
                        $SQL = "SELECT * FROM tenencias WHERE $Campo = '$Criterio';";
                        $Resultado = consultar($conn_MYSQL, $SQL);
                        $n = mysqli_num_rows($Resultado);
                        cerrar($conn_MYSQL);
                ?>

                        <table width="70%" border="1px" class="TableC">
                        <tr align="center" class="Header">
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
                        printf("<div class='RowsC'><b>Número de filas encontradas: </b>".$n."</div>");
                }
                ?>
        </div>
</body>
</html>
