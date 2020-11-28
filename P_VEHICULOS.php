<?php
    $id_vehiculo = $_POST['IdVehiculo'];
    $placa = $_POST['Placa'];
    $clave = $_POST['Clave'];
    $modelo = $_POST['Modelo'];
    $uso = $_POST['Uso'];
    $anio = $_POST['Anio'];
    $origen = $_POST['Origen'];
    $capacidad = $_POST['Capacidad'];
    $marca = $_POST['Marca'];
    $no_motor = $_POST['NoMotor'];
    $color = $_POST['Color'];
    $puerta = $_POST['Puerta'];
    $cilindro = $_POST['Cilindro'];
    $combustible = $_POST['Combustible'];
    $id_propietario = $_POST['IdPropietario'];

    print(" Id Vehiculo: ".$id_vehiculo);
    print(" Placa: ".$placa);
    print(" Clave: ".$clave);
    print(" Modelo: ".$modelo);
    print(" Uso: ".$uso);
    print(" Anio: ".$anio);
    print(" Origen: ".$origen);
    print(" Capacidad: ".$capacidad);
    print(" Marca: ".$marca);
    print(" No. de Motor: ".$no_motor);
    print(" Color: ".$color);
    print(" Puerta: ".$puerta);
    print(" Cilindro: ".$cilindro);
    print(" Combustible: ".$combustible);
    print(" Id Propietario: ".$id_propietario);

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "INSERT INTO vehiculos(id_vehiculo, placa, clave, modelo, uso, anio, origen, capacidad, marca, no_motor, color, puerta, cilindro, combustible, id_propietario) VALUES(NULL, '$placa', '$clave', '$modelo', '$uso', '$anio', '$origen', '$capacidad', '$marca', '$no_motor', '$color', '$puerta', '$cilindro', '$combustible', '$id_propietario');";
    $Resultado = consultar($conn_MYSQL, $SQL);
    if($Resultado == 1){
        print("<h1>Registro Insertado Correctamente</h1>");
    }else{
        print("<h1>ERROR: La Operación No Se Pudo Realizar</h1>");
    }
    cerrar($conn_MYSQL);
?>