<?php
    session_start();
    if(isset($_SESSION['Usuario'])){
        if($_SESSION['Tipo'] == "A"){

?>
    <script languaje="javascript">
    function HabilitaI(form){
        form.IButtons[0].disabled = false;
        form.IButtons[1].disabled = false;
        form.IButtons[2].disabled = false;
        form.IButtons[3].disabled = false;
        form.IButtons[4].disabled = false;
        form.IButtons[5].disabled = false;
        form.IButtons[6].disabled = false;
        form.IButtons[7].disabled = false;
        form.IButtons[8].disabled = false;

        form.SDUButtons[0].disabled = true;
        form.SDUButtons[1].disabled = true;
        form.SDUButtons[2].disabled = true;
        form.SDUButtons[3].disabled = true;
        form.SDUButtons[4].disabled = true;
        form.SDUButtons[5].disabled = true;
        form.SDUButtons[6].disabled = true;
        form.SDUButtons[7].disabled = true;
        form.SDUButtons[8].disabled = true;
    }

    function HabilitaSDU(form){
        form.SDUButtons[0].disabled = false;
        form.SDUButtons[1].disabled = false;
        form.SDUButtons[2].disabled = false;
        form.SDUButtons[3].disabled = false;
        form.SDUButtons[4].disabled = false;
        form.SDUButtons[5].disabled = false;
        form.SDUButtons[6].disabled = false;
        form.SDUButtons[7].disabled = false;
        form.SDUButtons[8].disabled = false;

        form.IButtons[0].disabled = true;
        form.IButtons[1].disabled = true;
        form.IButtons[2].disabled = true;
        form.IButtons[3].disabled = true;
        form.IButtons[4].disabled = true;
        form.IButtons[5].disabled = true;
        form.IButtons[6].disabled = true;
        form.IButtons[7].disabled = true;
        form.IButtons[8].disabled = true;
    }
    </script>
<html>
<head>
    <link rel=StyleSheet href="S_MENU_ADMINISTRADOR.css" type="text/css">
    <title>Menu Administrador</title>
</head>
<body>
    <div class="Overlay">
        <div class="Title" id="Tit">ADMINISTRADOR</div>
        <div class="Title" id="Name">Nombre: <?php print($_SESSION['Usuario']); ?></div>
        <div class="Title" id="Instruccions">¿Qué Deseas Hacer?</div>
        <form name="selection" id="Formulario">
            <input type="radio" id="insertar" name="OP" value="I" onClick="HabilitaI(this.form)">
            <label for="insertar" class="RB">Insertar</label>
            <input type="radio" id="sedeup" name="OP" value="SDU" onClick="HabilitaSDU(this.form)">
            <label for="sedeup" class="RB">Consultar, Eliminar & Actualizar</label><br>
            <h3 class="Title">Menú de Inserción</h3>
            <a href="F_ALTAS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Altas</button></a>
            <a href="F_BAJAS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Bajas</button></a>
            <a href="F_CONDUCTORES.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Conductores</button></a>
            <a href="F_LICENCIAS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Licencias</button></a>
            <a href="F_MULTAS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Multas</button></a>
            <a href="F_PROPIETARIOS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Propietarios</button></a>
            <a href="F_TENENCIAS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Tenencias</button></a>
            <a href="F_VEHICULOS.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Vehiculos</button></a>
            <a href="F_VERIFICACIONES.html"><button type="button" onclick="" disabled name="IButtons" class="Btn">Verificaciones</button></a>
            <h3 class="Title">Menú de Consulta, Eliminación & Actualización</h3>
            <a href="C_ALTAS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Altas</button></a>
            <a href="C_BAJAS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Bajas</button></a>
            <a href="C_CONDUCTORES.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Conductores</button></a>
            <a href="C_LICENCIAS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Licencias</button></a>
            <a href="C_MULTAS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Multas</button></a>
            <a href="C_PROPIETARIOS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Propietarios</button></a>
            <a href="C_TENENCIAS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Tenencias</button></a>
            <a href="C_VEHICULOS.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Vehiculos</button></a>
            <a href="C_VERIFICACIONES.php"><button type="button" onclick="" disabled name="SDUButtons" class="Btn">Verificaciones</button></a><br>
        </form>
        <br><a href="Cerrar_Sesion.php"><button type="button" onclick="" name="Close" class="BtnClose">Cerrar</button></a>
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