<?php
    $FileOne = "Archivo1.txt";
    $HandlerOne = fopen($FileOne, "r");
    $FileTwo = "Archivo2.txt";
    $HandlerTwo = fopen($FileTwo, "r");
    $FileThree = "Archivo3.txt";
    $HandlerThree = fopen($FileThree, "w");
    while($Caracter = fgetc($HandlerOne)){
        print("<b>".$Caracter."</b><br>");
        fwrite($HandlerThree, $Caracter);
    }
    fwrite($HandlerThree, "\n");
    print("<br>");
    while($CaracterTwo = fgetc($HandlerTwo)){
        print("<b>".$CaracterTwo."</b><br>");
        fwrite($HandlerThree, $CaracterTwo);
    }
?>