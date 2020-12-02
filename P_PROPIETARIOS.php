<html>
<head>
    <link rel=StyleSheet href="S_PFORMULARIOS.css" type="text/css"> 
    <title>Inserción de Propietarios</title>
</head>
<body>
    <div class="Overlay">
        <?php
            session_start();
            if($_SESSION['Tipo'] == 'U'){
        ?>
                <a href="MENU_USUARIO.php"><img src="Images/CSS/returng.png" class="Return"></a>
        <?php
            }else{
        ?>
                <a href="MENU_ADMINISTRADOR.php"><img src="Images/CSS/returng.png" class="Return"></a>
        <?php
            }
        ?>
<?php
    $id_propietario = $_POST['IdPropietario'];
    $rfc = $_POST['RFC'];
    $nombre = $_POST['Nombre'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO propietarios VALUES(NULL, '$rfc', '$nombre');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        echo("<img src='Images/CSS/exitoso.png' class='Registro'>");
    }else{
        echo("<img src='Images/CSS/fallido.png' class='Registro'>");
    }
    cerrar($conn_MYSQL);
?>
    </div>
</body>
</html>