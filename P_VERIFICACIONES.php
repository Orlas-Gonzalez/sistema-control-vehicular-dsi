<?php
    $id_verificacion = $_REQUEST['IdVerificacion'];
    $periodo = $_REQUEST['Periodo'];
    $dictamen = $_REQUEST['Dictamen'];
    $fecha = $_REQUEST['Fecha'];
    $hora = $_REQUEST['Hora'];
    $c_verificacion = $_REQUEST['CVerificacion'];
    $t_verificador = $_REQUEST['TVerificador'];
    $id_vehiculo = $_REQUEST['IdVehiculo'];
    
    print(" Id Verificacion: ".$id_verificacion);
    print(" Periodo: ".$periodo);
    print(" Dictamen: ".$dictamen);
    print(" Fecha: ".$fecha);
    print(" Hora: ".$hora);
    print(" Centro Verificador: ".$c_verificacion);
    print(" Tecnico Verificador: ".$t_verificador);
    print(" Id Vehiculo: ".$id_vehiculo);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO verificaciones(id_verificacion, periodo, dictamen, fecha, hora, c_verificacion, t_verificador, id_vehiculo) VALUES(NULL, '$periodo', '$dictamen', '$fecha', '$hora', '$c_verificacion', '$t_verificador', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>