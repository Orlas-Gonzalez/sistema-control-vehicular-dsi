<?php
    $folio = $_REQUEST['Folio'];
    $fecha = $_REQUEST['Fecha'];
    $municipio = $_REQUEST['Municipio'];
    $hora = $_REQUEST['Hora'];
    $motivo = $_REQUEST['Motivo'];
    $id_vehiculo = $_REQUEST['IdVehiculo'];
    
    print("Folio: ".$folio);
    print(" Fecha: ".$fecha);
    print(" Municipio: ".$municipio);
    print(" Hora: ".$hora);
    print(" Motivo: ".$motivo);
    print(" Id Vehiculo: ".$id_vehiculo);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO bajas VALUES(NULL, '$fecha', '$municipio', '$hora', '$motivo', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>