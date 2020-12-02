<html>
<head>
        <link rel=StyleSheet href="S_CFORMULARIOS.css" type="text/css">
        <title>Consulta de Propietarios</title>
</head>
<body>
        <div class="Overlay">
        <form name="FormOne" action="" method="GET" id="Formulario">
                        <h1 class="Title">BUSQUEDA DE PROPIETARIO</h1>
                        <b><label for="Citerio" class="Title">Criterio: </label></b>
                        <input type="text" name="Criterio" id="Criterio" required><br>
                        <br><b><label class="Title">Busqueda Por Campo </label></b><br>
                        <br><input type="radio" name="Campo" value="id_propietario" required>
                        <label for="id_propietario" class="RB">Propietario</label>
                        <br><input type="radio" name="Campo" value="RFC" required>
                        <label for="RFC" class="RB">RFC</label>
                        <br><input type="radio" name="Campo" value="nombre" required>
                        <label for="Nombre" class="RB">Nombre</label><br><br>
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
                        $SQL = "SELECT * FROM propietarios WHERE $Campo = '$Criterio';";
                        $Resultado = consultar($conn_MYSQL, $SQL);
                        $n = mysqli_num_rows($Resultado);
                        cerrar($conn_MYSQL);
                ?>

                        <table width="70%" border="1px" class="TableC">
                        <tr align="center" class="Header">
                        <td><b>Id Propietario</b></td>
                        <td><b>RFC</b></td>
                        <td><b>Nombre</b></td>
                        <td><b>Eliminar</b></td>
                        <td><b>Actualizar</b></td>
                        <td><b>Tarjeta de Circulación</b></td>
                        </tr>
                <?php
                        while ($Fila = mysqli_fetch_row($Resultado)) {
                ?>  
                        <tr align="center">
                                <td><?php echo $Fila[0]?></td>
                                <td><?php echo $Fila[1]?></td>
                                <td><?php echo $Fila[2]?></td>
                <?php
                                if($_SESSION['Tipo'] == 'U'){
                ?>
                                <td>No Aplica</td>
                                <td>No Aplica</td>
                                <td><a href="G_TARJETA_PDF.php?IdPropietario=<?php print($Fila[0]); ?>">Visualizar</a></td>
                <?php
                                }else{
                ?>
                                <td><a href="D_Propietarios.php?SKU_Prop=<?php print($Fila[0]); ?>">Eliminar</a></td>
                                <td><a href="U_Propietarios.php?IdPropietario=<?php print($Fila[0]); ?>&RFC=<?php print($Fila[1]); ?>&Nombre=<?php print($Fila[2]); ?>">Actualizar</a></td>
                                <td><a href="G_TARJETA_PDF.php?IdPropietario=<?php print($Fila[0]); ?>">Visualizar</a></td>
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
