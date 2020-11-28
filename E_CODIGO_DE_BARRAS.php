<?php
    include 'phpbarcode/barcode.php';
    $codigo = '000100255590';
    barcode('Images/BarCodes/' . $codigo . '.png', $codigo, 50, 'horizontal', 'code128', true);
?>

<html>
<body>
<img src="Images/BarCodes/<?php echo $codigo . '.png'; ?>">
</body>
</html>