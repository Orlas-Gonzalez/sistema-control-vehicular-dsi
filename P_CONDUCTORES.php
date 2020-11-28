<?php
    $id_conductor = $_REQUEST['IdConductor'];
    $foto = $_REQUEST['Foto'];
    $huella = $_REQUEST['Huella'];
    $firma = $_REQUEST['Firma'];
    $nombre = $_REQUEST['Nombre'];
    $fecha_nacimiento = $_REQUEST['FechaNacimiento'];
    $t_sangre = $_REQUEST['TipoSangre'];
    $observacion = $_REQUEST['Observacion'];
    $antiguedad = $_REQUEST['Antiguedad'];
    $donador = $_REQUEST['Donador'];
    $t_emergencia = $_REQUEST['TelefonoEmergencia'];
    
    print(" Id Condictor: ".$id_conductor);
    print(" Foto: ".$foto);
    print(" Huella: ".$huella);
    print(" Firma: ".$firma);
    print(" Nombre: ".$nombre);
    print(" Fecha de Nacimiento: ".$fecha_nacimiento);
    print(" Tipo de Sangre: ".$t_sangre);
    print(" Observacion: ".$observacion);
    print(" Antiguedad: ".$antiguedad);
    print(" Donador: ".$donador);
    print(" Telefono de Emergencia: ".$t_emergencia);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO conductores VALUES(NULL, '$foto', '$huella', '$firma', '$nombre', '$fecha_nacimiento', '$t_sangre', '$observacion', '$antiguedad', '$donador', '$t_emergencia');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>