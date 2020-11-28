<?php
    include 'phpqrcode/qrlib.php';

    // El nombre del fichero que se generar? (una imagen PNG).
    $file = 'QR1.png'; 
    // La data que llevar?.
    $data = 'ORLANDO GONZÁLEZ'; 

    // Y generamos la imagen.
    QRcode::png($data, $file);
?>
