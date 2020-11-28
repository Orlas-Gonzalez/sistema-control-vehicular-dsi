<?php
    session_start();
    if(isset($_SESSION['Usuario'])){
        if($_SESSION['Tipo'] == "U"){

?>

<html>
    <h1 style="text-align: center;">USUARIO</h1>
    <h2 style="text-align: center;">Nombre: <?php print($_SESSION['Usuario']); ?></h2>
    <h3 style="text-align: center;">Menú de Consultas</h3>
    <a href="C_ALTAS.php"><button type="button" onclick="">Altas</button></a>
    <a href="C_BAJAS.php"><button type="button" onclick="">Bajas</button></a>
    <a href="C_CONDUCTORES.php"><button type="button" onclick="">Conductores</button></a>
    <a href="C_LICENCIAS.php"><button type="button" onclick="">Licencias</button></a>
    <a href="C_MULTAS.php"><button type="button" onclick="">Multas</button></a>
    <a href="C_PROPIETARIOS.php"><button type="button" onclick="">Propietarios</button></a>
    <a href="C_TENENCIAS.php"><button type="button" onclick="">Tenencias</button></a>
    <a href="C_VEHICULOS.php"><button type="button" onclick="">Vehiculos</button></a>
    <a href="C_VERIFICACIONES.php"><button type="button" onclick="">Verificaciones</button></a>
    <br>
    <a href="Cerrar_Sesion.php">Cerrar</a>
</html>

<?php
        }else{
            header("Location:F_ACCESO.html");
        }
    }else{
        header("Location:F_ACCESO.html");
    }
?>