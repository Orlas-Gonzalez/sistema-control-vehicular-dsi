<?php
    // Obtención de Datos
    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "SELECT L.id_licencia, C.nombre, C.f_nacimiento, L.f_expedicion, C.antiguedad, L.t_licencia, C.observacion, C.t_sangre, C.donador, C.t_emergencia FROM licencias AS L, conductores AS C WHERE L.id_licencia = 1 AND L.id_conductor = C.id_conductor;";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Fila = mysqli_fetch_row($Resultado);
    cerrar($conn_MYSQL);

    // Creación del PDF
    require('../DSI/FPDF/fpdf.php'); 
    $pdf = new FPDF("P", "cm", array(5.5, 9.49)); 
    
    // Vista Delantera

    $pdf->AddPage(); 
    $pdf->Image("../DSI/Images/Licencia/logo_estado.png", 0.2, 0.2, 1);
    $pdf->SetFont('Arial','', 5.3);
    $pdf->SetDrawColor(165);
    $pdf->SetLineWidth(0.01);
    $pdf->Line(1.3, 0.25, 1.3, 1.3);
    $pdf->SetXY(1.35,0.2);
    $pdf->Cell(2.5, 0.3, "Estados Unidos Mexicanos");
    $pdf->SetXY(1.35, 0.4);
    $pdf->Cell(2.8, 0.3, utf8_decode("Poder Ejecutivo del Estado de Quéretaro"));
    $pdf->SetXY(1.35,0.75);
    $pdf->SetFont('Arial','B', 5.3);
    $pdf->Cell(2.8, 0.3, utf8_decode("Secretaría de Seguridad Ciudadana"));
    $pdf->SetXY(1.35, 0.97);
    $pdf->SetFont('Arial','B', 6.5);
    $pdf->Cell(2.8, 0.3, utf8_decode("Licencia para conducir"));
    $pdf->Image("../DSI/Images/Licencia/usuario.jpg", 2.8, 1.65, 2.2);
    $pdf->SetXY(2.8, 3.69);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(2.3, 0.3, utf8_decode("Nombre"), 0, 1, 'R');
    $pdf->SetXY(2.81, 3.98);
    $pdf->SetFont('Arial','', 8);
    $name_cond = explode(" ", $Fila[1]);
    $pdf->Cell(2.3, 0.3, utf8_decode($name_cond[2]), 0, 1, 'R');
    $pdf->SetXY(2.81, 4.3);
    $pdf->SetFont('Arial','', 8);
    $pdf->Cell(2.3, 0.3, utf8_decode("Gomez"), 0, 1, 'R');
    $pdf->SetXY(2.86, 4.7);
    $pdf->SetFont('Arial','B', 11);
    $pdf->Cell(2.3, 0.3, utf8_decode($name_cond[0]." ".$name_cond[1]), 0, 1, 'R');
    $pdf->SetXY(2.82, 4.95);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(2.3, 0.3, utf8_decode("Observaciones"), 0, 1, 'R');
    $pdf->SetXY(2.82, 5.23);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(2.3, 0.3, utf8_decode($Fila[6]), 0, 1, 'R');
    $pdf->SetXY(0.38, 2.9);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(2.3, 0.3, utf8_decode("No. de Licencia"), 0, 1, 'R');
    $pdf->SetXY(0.4, 3.2);
    $pdf->SetFont('Arial','B', 8);
    $pdf->SetTextColor(239, 12, 12);
    $pdf->Cell(2.3, 0.3, utf8_decode($Fila[0]), 0, 1, 'R');
    $pdf->SetXY(0.4, 3.4);
    $pdf->SetFont('Arial','B', 4);
    $pdf->SetTextColor(0);
    $pdf->Cell(2.3, 0.3, utf8_decode("AUTOMOVILISTA"), 0, 1, 'R');
    $pdf->SetXY(0.2, 5.1);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Fecha de Nacimiento"), 0, 1, 'R');
    $pdf->SetXY(0.1, 5.35);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[2]), 0, 1, 'R');
    $pdf->SetXY(0.2, 5.6);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Fecha de Expedición"), 0, 1, 'R');
    $pdf->SetXY(0.1, 5.88);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[3]), 0, 1, 'R');
    $pdf->SetXY(0.19, 6.16);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1, 0.3, utf8_decode("Valida Hasta"), 0, 1, 'R');
    $pdf->SetXY(0.1, 6.45);
    $pdf->SetFont('Arial','B', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("27/07/2023"), 0, 1, 'R');
    $pdf->SetXY(0.12, 6.73);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1, 0.3, utf8_decode("Antiguedad"), 0, 1, 'R');
    $pdf->SetXY(0.2, 7);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(0.45, 0.3, utf8_decode($Fila[4]), 0, 1, 'R');
    $pdf->SetXY(2.3, 6.16);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1, 0.3, utf8_decode("Firma"), 0, 1, 'R');
    $pdf->Image("../DSI/Images/Licencia/firma_orlas.png", 2.5, 6.44, 1);
    $pdf->Image("../DSI/Images/Licencia/qro_state.png", 4.1, 6.44, 1);
    if($Fila[5] == "A"){
        $pdf->Image("../DSI/Images/Licencia/tipol.png", 1.5, 7.13, 0.5);
    }elseif($Fila[5] == "B"){
        $pdf->Image("../DSI/Images/Licencia/tipol_B.png", 1.5, 7.13, 0.5);
    }elseif($Fila[5] == "C"){
        $pdf->Image("../DSI/Images/Licencia/tipol_C.png", 1.5, 7.13, 0.5);
    }elseif($Fila[5] == "D"){
        $pdf->Image("../DSI/Images/Licencia/tipol_D.png", 1.5, 7.13, 0.5);
    }else{
        $pdf->Image("../DSI/Images/Licencia/tipol.png", 1.5, 7.13, 0.5);
    }
    $pdf->SetXY(2, 7.28);
    $pdf->SetFont('Arial','', 2.1);
    $pdf->MultiCell(2.1, 0.1, utf8_decode("AUTORIZO PARA QUE LA PRESENTE SEA RECABADA COMO GARANTIA DE INFRACCIÓN"));

    // Vista Trasera

    $pdf->AddPage(); 
    $pdf->Image("../DSI/Images/Licencia/911.jpg", 0.2, 0.2, 1);
    $pdf->Image("../DSI/Images/Licencia/SKU.png", 1.75, 0.3, 2);
    $pdf->Image("../DSI/Images/Licencia/089.jpg", 4.15, 0.2, 1);
    $pdf->SetXY(3.7, 1);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Domicilio"), 0, 1, 'R');
    $pdf->SetXY(3.7, 1.28);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("AV. JOSE GONZALEZ ROBLES"), 0, 1, 'R');
    $pdf->SetXY(3.7, 1.56);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("30"), 0, 1, 'R');
    $pdf->SetXY(3.7, 1.84);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("SANTA CRUZ NIETO"), 0, 1, 'R');
    $pdf->SetXY(3.7, 2.12);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("C.P. 75706"), 0, 1, 'R');
    $pdf->SetXY(3.7, 2.4);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("SAN JUAN DEL RIO"), 0, 1, 'R');
    $pdf->Image("../DSI/Images/Licencia/Cars.png", 0.4, 2.9, 4.8);
    $pdf->SetXY(0.2, 3.4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Restricciones"), 0, 1, 'L');
    $pdf->SetXY(0.2, 3.68);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode("9 NINGUNA"), 0, 1, 'L');
    $pdf->SetXY(3.7, 3.4);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Grupo Sanguineo"), 0, 1, 'R');
    $pdf->SetXY(3.7, 3.68);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[7]), 0, 1, 'R');
    $pdf->SetXY(3.7, 3.96);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Donador de Organos"), 0, 1, 'R');
    $pdf->SetXY(3.7, 4.24);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[8]), 0, 1, 'R');
    $pdf->SetXY(3.7, 4.52);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Número de Emergencias"), 0, 1, 'R');
    $pdf->SetXY(3.7, 4.8);
    $pdf->SetFont('Arial','', 7);
    $pdf->Cell(1.5, 0.3, utf8_decode($Fila[9]), 0, 1, 'R');
    $pdf->Image("../DSI/Images/Licencia/firma_sec.png", 3.5, 5.2, 1.5);
    $pdf->SetXY(1.7, 6.15);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->MultiCell(3.5, 0.15, utf8_decode("M. EN A.P. JUAN MARCOS GRANADOS TORRES SECRETARIO DE SEGURIDAD CIUDADANA"), 0, 'R');
    $pdf->SetXY(0.2, 6.37);
    $pdf->SetFont('Arial','B', 3.8);
    $pdf->Cell(1.5, 0.3, utf8_decode("Fundamento Legal"), 0, 1, 'L');
    $pdf->SetXY(0.2, 6.65);
    $pdf->SetFont('Arial','', 2.8);
    $pdf->MultiCell(5, 0.15, utf8_decode("Articulo 19 fracción XII y 33 fracción II de la Ley Organica del Poder Ejecutivo del Estado de Querétaro, articulo 9 fracción XII y 55 de la Ley de Transito del Estado de Querétaro, articulo 4 de la Ley de Procedimientos Administrativos del Estado de Querétaro, articulo 28 del Reglamento de Transito del Estado de Querétaro y articulo 5 fracción IV, inciso b) y 20 fracción IV de la Ley de la Secretaría de Seguridad Ciudadana del Estado de Querétaro"), 0, 'J');
    $pdf->Image("../DSI/Images/Licencia/qro_state.png", 0.6, 7.4, 0.8);
    $pdf->Image("../DSI/Images/Licencia/Seguridad.jpg", 3.7, 7.4, 1);
    include 'phpqrcode/qrlib.php';
    $file = 'QRL.png'; 
    $data = 'ORLANDO GONZÁLEZ'; 
    QRcode::png($data, $file);
    $pdf->Image("QRL.png",  2.5, 7.4, 1);
    $pdf->Output();?>