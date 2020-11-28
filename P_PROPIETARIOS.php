<?php
    $id_propietario = $_POST['IdPropietario'];
    $rfc = $_POST['RFC'];
    $nombre = $_POST['Nombre'];

    print(" Id Propietario: ".$id_propietario);
    print(" RFC: ".$rfc);
    print(" Nombre: ".$nombre);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO propietarios VALUES(NULL, '$rfc', '$nombre');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>