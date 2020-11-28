<?php
    $folio = $_GET['Folio'];
    $fecha = $_GET['Fecha'];
    $vigencia = $_GET['Vigencia'];
    $municipio = $_GET['Municipio'];
    $hora = $_GET['Hora'];
    $id_vehiculo = $_GET['IdVehiculo'];
    
    print("Folio: ".$folio);
    print(" Fecha: ".$fecha);
    print(" Vigencia: ".$vigencia);
    print(" Municipio: ".$municipio);
    print(" Hora: ".$hora);
    print(" Id Vehiculo: ".$id_vehiculo);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO altas VALUES(NULL, '$fecha', '$vigencia', '$municipio', '$hora', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>