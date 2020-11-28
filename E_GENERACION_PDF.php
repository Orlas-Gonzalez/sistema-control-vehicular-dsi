<?php
    require('../DSI/FPDF/fpdf.php'); // Especificación de la ruta para acceder a la libreria
    $pdf = new FPDF(); // Constructor 
    $pdf->AddPage("P", "A4", 0); // Agregar Una Pagina - Pramatetros(Oriengtación, Tamaño, Rotación);
    $pdf->SetFont('Arial','B',16); // Definición de Fuente - Parametro(Familia, Estilo, Tamaño);
    $pdf->Cell(60,10,'¡Hola, Mundo!', 1); // Escribir Textos - Parametros
    $pdf->Image("logo.gif", 40, 40, 50, 50);
    $pdf->Output();
?>