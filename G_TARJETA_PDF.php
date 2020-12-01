<?php
    $ID_Propietario = $_GET['IdPropietario'];
    // Obtención de Datos
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "SELECT V.id_vehiculo, V.placa, V.clave, V.modelo, V.uso, V.anio, V.origen, V.capacidad, V.marca, V.no_motor, V.color, V.puerta, V.cilindro, V.combustible, P.id_propietario, P.nombre, P.RFC FROM propietarios AS P, vehiculos AS V WHERE P.id_propietario = $ID_Propietario AND P.id_propietario = V.id_propietario;";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Fila = mysqli_fetch_row($Resultado);
    cerrar($conn_MYSQL);

    // Creación del XML
    function GenerarXML($Fila){
        $doc = new DOMDocument('1.0');

        $doc->formatOutput = true;

        $raiz = $doc->createElement("TARJETASDECIRCULACION");
        $raiz = $doc->appendChild($raiz);

        $tarjeta = $doc->createElement("TARJETADECIRCULACION");
        $tarjeta = $raiz->appendChild($tarjeta);

        $idvehiculo = $doc->createElement("IDVEHICULO");
        $idvehiculo = $tarjeta->appendChild($idvehiculo);
        $textIdVehiculo = $doc->createTextNode($Fila[0]);
        $textIdVehiculo = $idvehiculo->appendChild($textIdVehiculo);

        $placa = $doc->createElement("PLACA");
        $placa = $tarjeta->appendChild($placa);
        $textPlaca = $doc->createTextNode($Fila[1]);
        $textPlaca = $placa->appendChild($textPlaca);

        $clave = $doc->createElement("CLAVE");
        $clave = $tarjeta->appendChild($clave);
        $textClave = $doc->createTextNode($Fila[2]);
        $textClave = $clave->appendChild($textClave);

        $modelo = $doc->createElement("MODELO");
        $modelo = $tarjeta->appendChild($modelo);
        $textModelo = $doc->createTextNode($Fila[3]);
        $textModelo = $modelo->appendChild($textModelo);

        $uso = $doc->createElement("USO");
        $uso = $tarjeta->appendChild($uso);
        $textUso = $doc->createTextNode($Fila[4]);
        $textUso = $uso->appendChild($textUso);

        $anio = $doc->createElement("ANIO");
        $anio = $tarjeta->appendChild($anio);
        $textAnio = $doc->createTextNode($Fila[5]);
        $textAnio = $anio->appendChild($textAnio);

        $origen = $doc->createElement("ORIGEN");
        $origen= $tarjeta->appendChild($origen);
        $textOrigen = $doc->createTextNode($Fila[6]);
        $textOrigen = $origen->appendChild($textOrigen);

        $capacidad = $doc->createElement("CAPACIDAD");
        $capacidad = $tarjeta->appendChild($capacidad);
        $textCapacidad = $doc->createTextNode($Fila[7]);
        $textCapacidad = $capacidad->appendChild($textCapacidad);

        $marca = $doc->createElement("MARCA");
        $marca = $tarjeta->appendChild($marca);
        $textMarca = $doc->createTextNode($Fila[8]);
        $textMarca = $marca->appendChild($textMarca);

        $nomotor = $doc->createElement("NOMOTOR");
        $nomotor = $tarjeta->appendChild($nomotor);
        $textNoMotor = $doc->createTextNode($Fila[9]);
        $textNoMotor = $nomotor->appendChild($textNoMotor);

        $color = $doc->createElement("COLOR");
        $color = $tarjeta->appendChild($color);
        $textColor = $doc->createTextNode($Fila[10]);
        $textColor = $color->appendChild($textColor);

        $puerta = $doc->createElement("PUERTA");
        $puerta = $tarjeta->appendChild($puerta);
        $textPuerta = $doc->createTextNode($Fila[11]);
        $textPuerta = $puerta->appendChild($textPuerta);

        $cilindro = $doc->createElement("CILINDRO");
        $cilindro = $tarjeta->appendChild($cilindro);
        $textCilindro = $doc->createTextNode($Fila[12]);
        $textCilindro = $cilindro->appendChild($textCilindro);

        $combustible = $doc->createElement("COMBUSTIBLE");
        $combustible = $tarjeta->appendChild($combustible);
        $textCombustible = $doc->createTextNode($Fila[13]);
        $textCombustible = $combustible->appendChild($textCombustible);

        $idpropietario = $doc->createElement("IDPROPIETARIO");
        $idpropietario = $tarjeta->appendChild($idpropietario);
        $textPropietario = $doc->createTextNode($Fila[14]);
        $textPropietario = $idpropietario->appendChild($textPropietario);

        $nombre = $doc->createElement("NOMBRE");
        $nombre = $tarjeta->appendChild($nombre);
        $textNombre = $doc->createTextNode($Fila[15]);
        $textNombre = $nombre->appendChild($textNombre);

        $rfc = $doc->createElement("RFC");
        $rfc = $tarjeta->appendChild($rfc);
        $textRFC = $doc->createTextNode($Fila[16]);
        $textRFC = $rfc->appendChild($textRFC);
        
        $doc->save("../DSI/XMLS/tarjeta_de_circulacion.xml");
    }

    //Generación del Archivo XML
    GenerarXML($Fila);

    require('../DSI/FPDF/fpdf.php');
    $pdf = new FPDF("L", "cm", array(10, 7)); 
    $pdf->AddPage(); 
    $pdf->SetDrawColor(30, 144, 255);
    $pdf->SetLineWidth(0.05);
    $pdf->Line(0, 5.5, 10, 5.5);
    $pdf->Image("../DSI/Images/Tarjeta_Circulacion/Circulo.png", 0.4, 5.75, 1);
    $pdf->Image("../DSI/Images/Tarjeta_Circulacion/footer.png", 2.2, 6.4, 6);
    $pdf->Image("../DSI/Images/Tarjeta_Circulacion/QR.png", 8.5, 5.7, 1.2);
    $pdf->Image("../DSI/Images/Tarjeta_Circulacion/QRO_E.png", 3.8, 5.7, 0.9);
    $pdf->Image("../DSI/Images/Tarjeta_Circulacion/peeq.jpg", 4.9, 5.6, 1.5);
    $pdf->SetDrawColor(165);
    $pdf->SetLineWidth(0.01);
    $pdf->Line(4.83, 5.7, 4.83, 6.3);
    $pdf->SetXY(0.2, 0.2);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Tipo de Servicio"), 0, 1, 'L');
    $pdf->SetXY(0.2, 0.48);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[4]), 0, 1, 'L');
    $pdf->SetXY(2.3, 0.2);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("HOLOGRAMA"), 0, 1, 'L');
    $pdf->SetXY(2.3, 0.48);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("939969"), 0, 1, 'L');
    $pdf->SetXY(3.7, 0.2);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("FOLIO"), 0, 1, 'L');
    $pdf->SetXY(3.7, 0.48);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("233651363"), 0, 1, 'L');
    $pdf->SetXY(5.2, 0.2);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("VIGENCIA"), 0, 1, 'L');
    $pdf->SetXY(5.2, 0.48);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("INDEFINIDA"), 0, 1, 'L');
    $pdf->SetXY(6.9, 0.2);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("PLACA"), 0, 1, 'L');
    $pdf->SetXY(6.9, 0.48);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[1]), 0, 1, 'L');
    $pdf->SetXY(0.2, 0.76);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("PROPITEARIO"), 0, 1, 'L');
    $pdf->SetXY(1.2, 0.76);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[15]), 0, 1, 'L');
    $pdf->SetXY(0.2, 1.32);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("RFC"), 0, 1, 'L');
    $pdf->SetXY(0.2, 1.6);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[16]), 0, 1, 'L');
    $pdf->SetXY(0.2, 1.88);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("LOCALIDAD"), 0, 1, 'L');
    $pdf->SetXY(0.2, 2.16);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("SANTA CRUZ NIETO"), 0, 1, 'L');
    $pdf->SetXY(0.2, 2.72);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->MultiCell(2.1, 0.2, utf8_decode("NÚMERO DE CONSTANCIA DE INSCRIPCIÓN (INCI)"), 0, 'L');
    $pdf->SetXY(0.2, 3.28);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("1LGOJKLC"), 0, 1, 'L');
    $pdf->SetXY(0.2, 3.84);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("ORIGEN"), 0, 1, 'L');
    $pdf->SetXY(0.2, 4.12);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[6]), 0, 1, 'L');
    $pdf->SetXY(0.2, 4.4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("COLOR"), 0, 1, 'L');
    $pdf->SetXY(0.2, 4.68);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[10]), 0, 1, 'L');
    $pdf->SetXY(2.85, 1.32);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("NUMERO DE SERIE"), 0, 1, 'L');
    $pdf->SetXY(2.85, 1.6);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("4H3KE25U1WT237736"), 0, 1, 'L');
    $pdf->SetXY(2.85, 1.88);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("MARCA/LINEA/SUBLÍNEA"), 0, 1, 'L');
    $pdf->SetXY(2.85, 2.16);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[8]), 0, 1, 'L');
    $pdf->SetXY(2.85, 2.44);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("G.M./VERSION/LINAJE GT"), 0, 1, 'L');
    $pdf->SetXY(2.85, 2.72);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("PQ.L"), 0, 1, 'L');
    $pdf->SetXY(2.85, 3.28);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("CILINDRAJE"), 0, 1, 'L');
    $pdf->SetXY(2.85, 3.46);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("CAPACIDAD"), 0, 1, 'L');
    $pdf->SetXY(2.85, 3.64);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("PUERTAS"), 0, 1, 'L');
    $pdf->SetXY(2.85, 3.82);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("ASIENTOS"), 0, 1, 'L');
    $pdf->SetXY(2.85, 4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("COMBUSTIBLE"), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.28);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[12]), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.46);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[7]), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.64);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[11]), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.82);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("5"), 0, 1, 'L');
    $pdf->SetXY(3.95, 4);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[13]), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.28);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("CVE VEHICULAR"), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.46);
    $pdf->SetFont('Arial','', 5);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[2]), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.74);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("CLASE"), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.92);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("TIPO"), 0, 1, 'L');
    $pdf->SetXY(4.3, 4.1);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("USO"), 0, 1, 'L');
    $pdf->SetXY(4.3, 4.28);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("RFA"), 0, 1, 'L');
    $pdf->SetXY(4.9, 3.74);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("1"), 0, 1, 'L');
    $pdf->SetXY(4.9, 3.92);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("5"), 0, 1, 'L');
    $pdf->SetXY(4.9, 4.1);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("36"), 0, 1, 'L');
    $pdf->SetXY(2.85, 4.4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("TRANSMISIÓN"), 0, 1, 'L');
    $pdf->SetXY(2.85, 4.68);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("AUTOMATICO"), 0, 1, 'L');
    $pdf->SetXY(6.5, 1.32);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("MODELO"), 0, 1, 'L');
    $pdf->SetXY(6.5, 1.6);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[3]), 0, 1, 'L');
    $pdf->SetXY(6.5, 1.88);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("OPERACIÓN"), 0, 1, 'L');
    $pdf->SetXY(6.5, 2.16);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[5]), 0, 1, 'L');
    $pdf->SetXY(6.5, 2.44);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("FOLIO"), 0, 1, 'L');
    $pdf->SetXY(6.5, 2.72);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("A 1675800"), 0, 1, 'L');
    $pdf->SetXY(6.5, 3.28);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("FECHA DE EXPEDICIÓN"), 0, 1, 'L');
    $pdf->SetXY(6.5, 3.56);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("19-JUN-18"), 0, 1, 'L');
    $pdf->SetXY(6.5, 3.84);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("OFICINIA EXPEDIDORA"), 0, 1, 'L');
    $pdf->SetXY(8.1, 3.84);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("2"), 0, 1, 'L');
    $pdf->SetXY(6.5, 4.12);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("MOVIMIENTO"), 0, 1, 'L');
    $pdf->SetXY(6.5, 4.4);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("TARJETA DE CIRCULACIÓN"), 0, 1, 'L');
    $pdf->SetXY(6.5, 4.68);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("NÚMERO DE MOTOR"), 0, 1, 'L');
    $pdf->SetXY(8, 4.68);
    $pdf->SetFont('Arial','', 5);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[9]), 0, 1, 'L');
    $pdf->Output();
?>