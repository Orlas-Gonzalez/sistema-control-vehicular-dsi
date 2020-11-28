<?php
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
    $pdf->Cell(1.5, 0.3, utf8_decode("PARTICULAR"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("2009/VLB5467*"), 0, 1, 'L');
    $pdf->SetXY(0.2, 0.76);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("PROPITEARIO"), 0, 1, 'L');
    $pdf->SetXY(1.2, 0.76);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("GARCIA CORTES SERGIO ORLANDO"), 0, 1, 'L');
    $pdf->SetXY(0.2, 1.32);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("RFC"), 0, 1, 'L');
    $pdf->SetXY(0.2, 1.6);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("HBHB801539UJ5"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("NACIONAL"), 0, 1, 'L');
    $pdf->SetXY(0.2, 4.4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("COLOR"), 0, 1, 'L');
    $pdf->SetXY(0.2, 4.68);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("BLANCO"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("CHEVROLET"), 0, 1, 'L');
    $pdf->SetXY(2.85, 2.44);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("G.M./PONTIAC/SUNFIRE GT"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("4"), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.46);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("0"), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.64);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("2"), 0, 1, 'L');
    $pdf->SetXY(3.95, 3.82);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("5"), 0, 1, 'L');
    $pdf->SetXY(3.95, 4);
    $pdf->SetFont('Arial','', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("1"), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.28);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("CVE VEHICULAR"), 0, 1, 'L');
    $pdf->SetXY(4.3, 3.46);
    $pdf->SetFont('Arial','', 5);
    $pdf->Cell(1.5, 0.3, utf8_decode("0042428"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("1997"), 0, 1, 'L');
    $pdf->SetXY(6.5, 1.88);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("OPERACIÓN"), 0, 1, 'L');
    $pdf->SetXY(6.5, 2.16);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("2018/1214949"), 0, 1, 'L');
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
    $pdf->Cell(1.5, 0.3, utf8_decode("VS237736"), 0, 1, 'L');
    $pdf->Output();
?>