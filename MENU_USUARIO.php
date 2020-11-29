<?php
    session_start();
    if(isset($_SESSION['Usuario'])){
        if($_SESSION['Tipo'] == "U"){

?>

<html>
<head>
    <link rel=StyleSheet href="S_MENU_USUARIO.css" type="text/css">
    <title>Menu Usuario</title>
</head>
<body>
    <div class="Overlay">
        <div class="Title" id="Tit">USUARIO</div>
        <div class="Title" id="Name">Nombre: <?php print($_SESSION['Usuario']); ?></div>
        <div class="Title" id="Instruccions">Menú de Consultas</div>
        <a href="C_ALTAS.php"><button type="button" onclick="" class="BtnSelect" id="BtnAltas">Altas</button></a>
        <a href="C_BAJAS.php"><button type="button" onclick="" class="BtnSelect" id="BtnBajas">Bajas</button></a>
        <a href="C_CONDUCTORES.php"><button type="button" onclick="" class="BtnSelect" id="BtnConductores">Conductores</button></a>
        <a href="C_LICENCIAS.php"><button type="button" onclick="" class="BtnSelect" id="BtnLicencias">Licencias</button></a>
        <a href="C_MULTAS.php"><button type="button" onclick="" class="BtnSelect" id="BtnMultas">Multas</button></a>
        <a href="C_PROPIETARIOS.php"><button type="button" onclick="" class="BtnSelect" id="BtnPropietarios">Propietarios</button></a>
        <a href="C_TENENCIAS.php"><button type="button" onclick="" class="BtnSelect" id="BtnTenencias">Tenencias</button></a>
        <a href="C_VEHICULOS.php"><button type="button" onclick="" class="BtnSelect" id="BtnVehiculos">Vehiculos</button></a>
        <a href="C_VERIFICACIONES.php"><button type="button" onclick="" class="BtnSelect" id="BtnVerificaciones">Verificaciones</button></a>
        <br>
        <a href="Cerrar_Sesion.php"><button type="button" onclick="" name="Close" class="BtnClose">Cerrar</button></a>
    </div>
</body>
</html>

<?php
        }else{
            header("Location:F_ACCESO.html");
        }
    }else{
        header("Location:F_ACCESO.html");
    }
?>