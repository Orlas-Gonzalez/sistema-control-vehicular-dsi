<?php
    $folio = $_POST['Folio'];
    $nombre = $_POST['Nombre'];
    $concepto = $_POST['Concepto'];
    $no_infraccion = $_POST['NoInfraccion'];
    $policia = $_POST['Policia'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $lugar = $_POST['Lugar'];
    $garantia = $_POST['Garantia'];
    $id_licencia = $_POST['IdLicencia'];
    $id_vehiculo = $_POST['IdVehiculo'];
    
    print(" Folio: ".$folio);
    print(" Nombre: ".$nombre);
    print(" Concepto: ".$concepto);
    print(" No. de Infraccion: ".$no_infraccion);
    print(" Policia: ".$policia);
    print(" Fecha: ".$fecha);
    print(" Hora: ".$hora);
    print(" Lugar: ".$lugar);
    print(" Garantia: ".$garantia);
    print(" Id Licencia: ".$id_licencia);
    print(" Id Vehiculo: ".$id_vehiculo);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO multas(folio, nombre, concepto, no_infrac, policia, fecha, hora, lugar, garantia, id_licencia, id_vehiculo) VALUES(NULL, '$nombre', '$concepto', '$no_infraccion', '$policia', '$fecha', '$hora', '$lugar', '$garantia', '$id_licencia', '$id_vehiculo');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>