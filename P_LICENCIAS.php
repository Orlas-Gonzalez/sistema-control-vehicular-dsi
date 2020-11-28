<?php
    $id_licencia = $_REQUEST['IdLicencia'];
    $t_licencia = $_REQUEST['TipoLicencia'];
    $f_expedicion = $_REQUEST['FechaExpedicion'];
    $autorizacion = $_REQUEST['Autorizacion'];
    $id_conductor = $_REQUEST['IdConductor'];
    
    print(" Id Licencia: ".$id_licencia);
    print(" Tipo de Licencia: ".$t_licencia);
    print(" Fecha de Expedicion: ".$f_expedicion);
    print(" Autorizacion: ".$autorizacion);
    print(" Id Conductor: ".$id_conductor);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO licencias(id_licencia, t_licencia, f_expedicion, autorizacion, id_conductor) VALUES(NULL, '$t_licencia', '$f_expedicion', '$autorizacion', '$id_conductor');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>