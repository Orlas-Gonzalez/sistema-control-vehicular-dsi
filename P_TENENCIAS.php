<?php
    $id_tenencia = $_GET['IdTenencia'];
    $periodo = $_GET['Periodo'];
    $monto = $_GET['Monto'];
    $id_vehiculo = $_GET['IdVehiculo'];

    print(" Id Tenencia: ".$id_tenencia);
    print(" Periodo: ".$periodo);
    print(" Monto: ".$monto);
    print(" Id Vehiculo: ".$id_vehiculo);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO tenencias(id_tenencia, periodo, monto, id_vehiculo) VALUES(NULL, '$periodo', '$monto', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>